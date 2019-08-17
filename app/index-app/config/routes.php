<?php

Router::parseExtensions('html', 'rss','jpg');

Router::connect('/technical', array('controller' => 'posts', 'action' => 'index'));
Router::connect('/technical/:id/:slug', array('controller' => 'posts', 'action' => 'view'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));

Router::connect('/kurumsal/:slug', array('controller' => 'sayfa', 'action' => 'index'),Array('pass' => Array('slug')));
Router::connect('/', array('controller' => 'main', 'action' => 'index'));

Router::connect('/pages/*', array('controller' => 'main', 'action' => 'index'));
Router::connect('/brands/:id/:slug', array('controller' => 'brands', 'action' => 'view'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));

Router::connect('/hizmet/:id-:slug/', array('controller' => 'hizmetlerimiz', 'action' => 'view'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));
Router::connect('/hizmetlerimiz/:slug', array('controller' => 'hizmetlerimiz', 'action' => 'view'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));


Router::connect('/sectors/:id/:slug', array('controller' => 'sectors', 'action' => 'index'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));
Router::connect('/sectors', array('controller' => 'sectors', 'action' => 'index'));



Router::connect('/references', array('controller' => 'referanslarimiz', 'action' => 'index'));
Router::connect('/references/:id/:slug', array('controller' => 'referanslarimiz', 'action' => 'view'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));
Router::connect('/productreferences/:id/:slug', array('controller' => 'referanslarimiz', 'action' => 'urun'),Array('pass' => Array('id','slug'),'id' => '[0-9]+'));

Router::connect('/:language',array('controller' => 'main' , 'action' => 'index'),array('language' => '[a-z]{2}'));
Router::connect('/:language/:controller',array('action' => 'index'),array('language' => '[a-z]{2}'));
Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{2}'));

Router::connect('/search/*', array('controller' => 'search', 'action' => 'index'));

        
