<?php
    class Menu{
        private $pages;

        public function __construct($pages){
            
            $this->pages = $pages;

        }

        function generate_Mobilemenu(): string{
            $menuItems = 
            '<nav class="fixed-top navbar navbar-expand-lg d-lg-none top">'.
            '<div class="container-fluid justify-content-center ">'.
            '<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"'.
            'aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">'.
            '<span class="navbar-toggler-icon"></span>'.
            '</button>'.
            '<div class="collapse navbar-collapse" id="navbarNav">'.
            '<img src="../assets/img/icon.svg" alt="icon" class="rounded float-start navbar_icon" width="40" height="40">'.
            '<ul class="navbar-nav">';
            
            foreach($this->pages as $page_name => $page_url){
                $menuItems .= 
                '<li class="nav-item">
                    <a class="nav-link" href="'.$page_url.'">'.$page_name.'</a>
                </li>';
            }
            
            $menuItems .= '</ul>'.
                          '</div>'.
                          '</div>'.
                          '</nav>';
        
            return $menuItems;
        }

        function generate_menu(): string{
            $menuItems = 
            '<header class="top fixed-top d-none d-lg-flex justify-content-center">'.
            '<img src="../assets/img/icon.svg" alt="icon" class="rounded float-start navbar_icon" width="40" height="40">';

            
            foreach($this->pages as $page_name => $page_url){
                $menuItems .= '<a href="'.$page_url.'" class="text-white">'.$page_name.'</a>';
            }

            $menuItems .= '</header>';
        
            return $menuItems;
        }
    }
?>