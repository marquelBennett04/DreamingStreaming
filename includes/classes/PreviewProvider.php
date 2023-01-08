<?php

class PreviewProvider{

private $con, $username;

    public function __construct($con, $username){
        $this->con = $con;
        $this->username = $username;
    }

    public function createPreviewVideo($entity){
        
        if($entity == null){
            $entity = $this->getRandomEntity();
        }

        $id = $entity->getId();
        $name = $entity->getName();
        $preview = $entity->getPreview();
        $thumbnail = $entity->getThumbnail();

        //TODO ADD SUB

        return "<div class = 'previewContainer'>

                    <img src = '$thumbnail' class = 'previewImage' hidden>

                    <video autoplay muted class = 'previewVideo' onended='previewEnded()'>
                        <source src = '$preview' type = 'video/mp4'>
                    </video>

                    <div class= 'previewOverlay'>
                        <div class='mainDetails'>
                            <h3>$name</h3>

                            <div class= 'buttons'>
                                <button><i class='fa-solid fa-play'></i> Play</button>
                                <button onclick='volumeToggle(this)'><i class='fa-solid fa-volume-xmark'></i></button>
                            </div
                        </div>
                    </div>

                </div>";

        
    }

    private function getRandomEntity(){

       $entity = EntityProvider::getEntities($this->con, null, 1);
       return $entity[0];
    }
}

?>