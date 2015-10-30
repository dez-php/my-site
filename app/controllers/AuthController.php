<?php

    namespace App\Controller;

    use App\Model\Entity\Sources;
    use Dez\Mvc\Controller;

    class AuthController extends Controller
    {

        public function signInAction()
        {

            if( $this->request->isPost() ) {
                try {
                    $this->auth->authenticate( $this->request->getPost( 'email' ), $this->request->getPost( 'password' ) );
                } catch ( \Exception $e ) {
                    $this->flash->error( $e->getMessage() );
                }
                $this->response->redirect( $this->url->path( '' ) );
            }

            $this->view->setMainLayout( 'form.php' );
        }

        public function registerAction()
        {
            if( $this->request->isPost() ) {
                $email      = $this->request->getPost( 'email' );
                $password   = $this->request->getPost( 'password' );

                $this->auth->create( $email, $password );
                $this->response->redirect( $this->url->path( '' ) );
            }
            $this->view->setMainLayout( 'form.php' );
        }

        public function logoutAction()
        {
            $this->auth->logout();
            $this->response->redirect( $this->url->path( '' ) );
        }

    }