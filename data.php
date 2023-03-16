<?php
// создаем класс для данных
class signData {
    public $name;
    public $emails;
    public $phones;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->emails = $data ['emails'];
        $this->phones = $data ['phones'];
    }
}


