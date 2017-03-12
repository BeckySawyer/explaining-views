<?php
// Think of this page as a "controller", this is where all your PHP logic will go.
// Here you will require anything necessary to your files "Config, functions etc."
// Your PHP logic will go here
$page['title'] = 'Contact';

// After PHP logic you will require the view that you want to show

$contactOptions = [
['name' => 'Web Design', 'value' => 'web'],
['name' => 'Hosting', 'value' => 'hosting'],
['name' => 'Graphic Design', 'value' => 'graphics']
];

require 'views/contact.view.php';
