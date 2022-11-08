<?php

require_once 'post.php';

class User {
    private $users = [['Genis Ferreira','genis@etec.com','789','864.867.707-67','http://2.bp.blogspot.com/-QTHyGlx8CMQ/VbI706YBUVI/AAAAAAAADsU/I5ezCxDBBhY/s1600/boteco%2Bde%2Boa%2B%25282%2529.jpg'],
                    ['José Cicero','jose@etec.com','321','572.618.409-20','http://3.bp.blogspot.com/-tNdbaL-qtvc/VbI72_oyZ_I/AAAAAAAADss/sa7Kewxgig4/s1600/boteco%2Bde%2Boa%2B%25283%2529.jpg'],
                    ['Leandro Laurindo','leal@etec.com','123','150.654.746-05','https://i.pinimg.com/originals/91/08/d0/9108d049c34d33384e72aad610a62ec9.jpg'],
                    ['Sara Cardoso','sara@etec.com','890','123.285.341-04','https://i.pinimg.com/originals/7d/d3/96/7dd396dfcb8c5da076164fea8580d4d2.jpg'],
                    ['Cleiton Silva','cleiton@etec.com','abc','112.737.620-96','https://yt3.ggpht.com/-2yKZC3L0dyw/AAAAAAAAAAI/AAAAAAAAAAA/Hl09t7Ertlg/s900-c-k-no-mo-rj-c0xffffff/photo.jpg']
    ];

    public function searchData()
    {
        $post = new Post();
        $email = $post->get('email');
        $password = $post->get('password');

        for($i = 0;$i<count($this->users);$i++)
        {
            if($email == $this->users[$i][1]&& $password==$this->users[$i][2])
            {
                return $i;
            }
            else if($i == count($this->users)-1)
            {
                return 0;
            }            
        }
    }

    public function getName(){
        return $this->users[$this->searchData()][0];
    }
    public function getEmail() {
        return $this->users[$this->searchData()][1];
    }
    public function getPassword() {
        return $this->users[$this->searchData()][2];
    }
    public function getCPF(){
        return $this->users[$this->searchData()][3];
    }       
    public function getLink(){
        return $this->users[$this->searchData()][4];
    }
    
}