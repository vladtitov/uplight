   <?php
   class Projects{
            var $library;
             function __construct($library){
                $this->library = $library;
             }

           public function getAllProjects(){
                 $items = array();
                $item=new stdClass();
                $item->tmpl='item-project';
                $item->topic='Building Directories';
                $item->text=$this->library->textCom('Directories');
                   $item->image=$this->library->image('Directories');
                   $item->href = 'Products.php?Building-Directories#Building-Directories';
                   $items [] =$item;


                   $item=new stdClass();
                   $item->tmpl='item-project';
                   $item->topic='Gallery Timeline';
                   $item->text=$this->library->textCom('Gallery');;
                   $item->image=$this->library->image('CFL');
                   $item->href = 'Portfolio.php?Gallery-Timeline#Gallery-Timeline';
                   $items [] =$item;

            return $items;

           }

            public function getServices1(){
                   $items = array();
                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Mobile Applications';
                   $item->text=$this->library->textCom('Mobile Applications');
                   $item->icon='mobile';
                   $item->href = 'Products.php?Mobile-Applications#Mobile-Applications';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Kiosk Software';
                   $item->text=$this->library->textCom('Kiosk Software');
                   $item->icon='desktop';
                   $item->href = 'Products.php?Kiosk-Software#Kiosk-Software';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='CMS';
                   $item->text=$this->library->textCom('CMS');
                   $item->icon='user';
                   $item->href = 'Products.php?CMS#CMS';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Web Applications';
                   $item->text=$this->library->textCom('Web Applications');
                   $item->icon='cloud';
                   $item->href = 'Products.php?Web Applications#Web Applications';
                    $items [] = $item;

            return $items;


            }
            public function getServices($ar){
                 $items = array();
                    foreach($ar as $item){
                       $item=new stdClass();
                       $item->tmpl='item-service';
                       $item->topic=$item;
                        $item->text=$this->library->textCom('Mobile Applications');
                    }


                   $item->text=$this->library->textCom('Mobile Applications');
                   $item->icon='mobile';
                   $item->href = 'Products.php?Mobile-Applications#Mobile-Applications';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Kiosk Software';
                   $item->text=$this->library->textCom('Kiosk Software');
                   $item->icon='desktop';
                   $item->href = 'Products.php?Kiosk-Software#Kiosk-Software';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='CMS';
                   $item->text=$this->library->textCom('CMS');
                   $item->icon='user';
                   $item->href = 'Products.php?CMS#CMS';
                   $items [] =$item;

                   $item=new stdClass();
                   $item->tmpl='item-service1';
                   $item->topic='Web Applications';
                   $item->text=$this->library->textCom('Web Applications');
                   $item->icon='cloud';
                   $item->href = 'Products.php?Web Applications#Web Applications';
                   $items [] = $item;

                   return $items;


                   }


   }


