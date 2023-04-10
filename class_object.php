<?php
class language
{
    public $lang_name;
    public $lang_code;

    public function set_name($lang_name,$lang_code)
    {
        $this->name=$lang_name;
        $this->code=$lang_code;
    }
    public function get_name()
    {
        return $this->name." ".$this->code;
    }


}
$find_lang = new language();

// Setter Call Methods
$find_lang->set_name('English','EN');
// Getter Call Methods
echo $find_lang->get_name();



?>