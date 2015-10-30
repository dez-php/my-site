<?php

    namespace App\Controller;

    use App\Model\Entity\Sources;
    use Dez\Mvc\Controller;

    class SourceController extends Controller {

        public function itemAction( $id )
        {

        }

        public function indexAction()
        {

            if( $this->request->isPost() ) {
                $id = ( new Sources )
                    ->setName( $this->request->getPost( 'name' ) )
                    ->setContent( $this->request->getPost( 'content' ) )
                    ->setLanguage( $this->request->getPost( 'language' ) )
                ->save();
                $this->flash->success( "Source #{$id} added" );
//                $this->response->redirect( $this->url->create( 'source:item', [ 'id' => $id ] ) );
            }

        }

    }