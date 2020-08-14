<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

use Grav\Common\Grav;
use Grav\Common\Page\Collection;
use Grav\Common\Page\Page;
use Grav\Common\Page\Pages;
use Grav\Common\Taxonomy;

/**
 * Class PhotonEventPlugin
 * @package Grav\Plugin
 */
class PhotonEventPlugin extends Plugin
{

    public static function getSubscribedEvents()
    {
      return [
        'onPluginsInitialized' => ['onPluginsInitialized', 0],
        'onGetPageTemplates' => ['onGetPageTemplates', 0]
      ];
    }

    public function onPluginsInitialized()
    {

      if ( $this->isAdmin() ) {

        $this->enable([
          'onAdminSave' => ['onAdminSave', 0], //from events plugin - not sure if necessary
          // 'onGetPageTemplates' => ['onGetPageTemplates', 0]
        ]);

        return;
      }

      $this->enable([
        'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
        'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
      ]);

      return;

    }

    // called when saving page in admin
    public function onAdminSave(Event $event)
    {
      // placeholder
    }


    /** Add blueprint directories for admin templates.     */
    public function onGetPageTemplates(Event $event)
    {
        $types = $event->types;
        $locator = Grav::instance()['locator'];
        $types->scanBlueprints($locator->findResource('plugin://' . $this->name . '/blueprints'));
        $types->scanTemplates($locator->findResource('plugin://' . $this->name . '/templates'));
    }

    /**  Add current directory to twig lookup paths     */
    public function onTwigTemplatePaths()
    {
      $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }


    public function onTwigSiteVariables()
    {
      // setup
      $page = 			$this->grav['page'];
      $pages = 			$this->grav['pages'];
      // $collection = $pages->all()->ofType('event');
      $twig = 			$this->grav['twig'];
      $assets = 		$this->grav['assets'];

      // only load the vars if this datatype page
      if ($page->template() == 'event')
      {

        // styles
        if ($this->config->get('plugins.photon-event.built_in_css')) {

          $css = 'plugin://photon-event/assets/event.css';
          $assets->addCss( $css, 100, false, 'photon-plugins' );

        }

        // scripts
        if ($this->config->get('plugins.photon-event.built_in_js')) {

          $js = 'plugin://photon-event/assets/event.js';
          $assets->addJs($js, 100, false, 'defer', 'photon-plugins' );

        }
      }

      // <link href='../fullcalendar.min.css' rel='stylesheet' />
      // <link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />
      // <script src='../lib/moment.min.js'></script>
      // <script src='../lib/jquery.min.js'></script>
      // <script src='../fullcalendar.min.js'></script>

      if ($page->template() == 'calendar')
      {

        // styles
        if ($this->config->get('plugins.photon-event.built_in_css')) {

          $css = 'plugin://photon-event/assets/fullcalendar-5.2.0/lib/main.css';
          $assets->addCss( $css, 300 );
          // $css = 'plugin://photon-event/assets/fullcalendar-3.9.0/fullcalendar.print.min.css';
          // $assets->addCss( $css, 300 );

          $css = 'plugin://photon-event/assets/calendar.css';
          $assets->addCss( $css, 100, false, 'photon-plugins' );

        }

        // scripts
        if ($this->config->get('plugins.photon-event.built_in_js')) {

          // $js = 'plugin://photon-event/assets/fullcalendar-3.9.0/lib/moment.min.js';
          // $assets->addJs( $js, 300, false, 'defer' ); //, {'priority':500, 'loading':'defer'}
          $js = 'plugin://photon-event/assets/fullcalendar-5.2.0/lib/main.js';
          $assets->addJs( $js, 250, false, 'defer' );

          $js = 'plugin://photon-event/assets/calendar.js';
          $assets->addJs($js, 100, false, 'defer', 'photon-plugins' );


        }
      }
    }

}
