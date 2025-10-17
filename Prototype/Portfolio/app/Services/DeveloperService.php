<?php

namespace App\services;
class DeveloperService{

    public function getProfile(){
        return [
            'name' => 'Ali Essamrachi',
            'role' => 'Full Stack Developer',
            'bio' => 'Passionate about creating web applications and learning new technologies.',
            'email' => 'essachi.service@gmain.com'
        ];
    }

}
