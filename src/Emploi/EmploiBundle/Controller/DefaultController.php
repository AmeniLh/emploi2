<?php

namespace Emploi\EmploiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmploiBundle:Default:index.html.twig');
    }

    public function indexAdminAction()
    {
        return $this->render('EmploiBundle:Admin:indexAdmin.html.twig');
    }

    public function creerAnneeAction()
    {

        return $this->render('EmploiBundle:Admin:creerAnnee.html.twig');
    }
    public function creerClasseAction()
    {

        return $this->render('EmploiBundle:Admin:creerClasse.html.twig');
    }
    public function gestionEleveAction()
    {

        return $this->render('EmploiBundle:Admin:gestionEleve.html.twig');
    }
    public function gestionEmploiStatAction()
    {

        return $this->render('EmploiBundle:Admin:gestionEmploiStatique.html.twig');
    }
    public function gestionEnseignantAction()
    {

        return $this->render('EmploiBundle:Admin:gestionEnseignant.html.twig');
    }
    public function sidebarAdminAction()
    {
        if (!$this->getDispatcher()->hasListeners(ThemeEvents::THEME_SIDEBAR_USER)) {
            return new Response();
        }
        $userEvent = $this->getDispatcher()->dispatch(ThemeEvents::THEME_SIDEBAR_USER, new ShowUserEvent());

        return $this->render('EmploiBundle:Admin:sidebarAdmin.html.twig',
            array(
            'user' => $userEvent->getUser()
        ));
    }
}
