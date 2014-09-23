<?php

namespace Drupal\webprofiler_graphs\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\webprofiler\DataCollector\DatabaseDataCollector;
use Drupal\webprofiler\DataCollector\ServiceDataCollector;
use Drupal\webprofiler_graphs\Database\WebprofilerPhpSqlParser;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Profiler\Profile;
use \Drupal\webprofiler\Profiler\Profiler;

/**
 * Class WebprofilerGraphsController
 */
class WebprofilerGraphsController extends ControllerBase {

  /**
   * @var \Drupal\webprofiler\Profiler\Profiler
   */
  private $profiler;


  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('profiler')
    );
  }

  /**
   * Constructs a new WebprofilerController.
   *
   * @param \Drupal\webprofiler\Profiler\Profiler $profiler
   */
  public function __construct(Profiler $profiler) {
    $this->profiler = $profiler;
  }

  /**
   * @param \Symfony\Component\HttpKernel\Profiler\Profile $profile
   *
   * @return array
   */
  public function graphsAction(Profile $profile) {
    $this->profiler->disable();

    $build = array();

    return $build;

  }
}
