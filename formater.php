<?php
// класс для форматирования телефона
class phoneFormater {
    public function formater($phArray)
    {
        $formattedPhones = array();
        foreach ($phArray as $ph) {
            $ph1 = '' . $ph;
            $nd = str_split($ph1);
            $newPhone = $nd[0] . $nd[1] . $nd[2] . ' (' . $nd[3] . $nd[4] . ') '
                . $nd[5] . $nd[6] . $nd[7] . '-' . $nd[8] . $nd[9] . '-' . $nd[10] . $nd[11];
            array_push($formattedPhones, $newPhone);
        }
        return $formattedPhones;
    }   
}

