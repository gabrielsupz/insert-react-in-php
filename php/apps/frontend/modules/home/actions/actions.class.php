<?php

/**
 * home actions.
 *
 * @package    symfony
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeTest(sfWebRequest $request)
  {
    $this->message = 'Bem-vindo à minha página inicial personalizada!';
  }

  public function executeInfo(sfWebRequest $request)
{
  $this->texto = 'Esta é a página Sobre do site.';
}
  public function executeIframe(sfWebRequest $request)
{
  $this->texto = 'Esta é a página sobre como adicionar o react de forma mais segura usando iframe.';
}
  public function executeDom(sfWebRequest $request)
{
  $this->texto = 'Esta é a página sobre como adicionar o react usando o DOM';
}
}


