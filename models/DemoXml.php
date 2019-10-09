<?php
/**
 * Created by PhpStorm.
 * User: ClassUser
 * Date: 04.10.2019
 * Time: 10:23
 */

namespace app\models;

use Yii;
use yii\base\Model;
use DOMDocument;


class DemoXml extends Model
{

    public function generateXml(){
        $doc = new DOMDocument('1.0', 'ISO-8859-15');
        $doc->formatOutput = false;

        $guestbook = $doc->createElement('guestbook');
        $guestbook = $doc->appendChild($guestbook);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Terje');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Beck');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Jan');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Refsnes');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Torleif');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Rasmussen');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Anton');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Chek');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Stale');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Refsnes');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Hari');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Prawin');
        $text = $lname->appendChild($text);

        $guest = $doc->createElement('quest');
        $guest = $guestbook->appendChild($guest);

        $fname = $doc->createElement('fname');
        $fname = $guest->appendChild($fname);

        $text = $doc->createTextNode('Hege');
        $text = $fname->appendChild($text);

        $lname = $doc->createElement('lname');
        $lname = $guest->appendChild($lname);

        $text = $doc->createTextNode('Refsnes');
        $text = $lname->appendChild($text);

        $doc->save('xml.xml');
    }
}