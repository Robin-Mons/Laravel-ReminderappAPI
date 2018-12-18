<?php
/**
 * Created by PhpStorm.
 * User: robin
 * Date: 16-12-2018
 * Time: 18:13
 */

namespace App\Classes;

use App\Interfaces\DatabaseHandlerInterface;
use App\Objects\ReminderObj;
use App\Reminder;

class DatabaseHandler implements DatabaseHandlerInterface
{

    public function getReminders()
    {

        //alle reminders ophalen
        $get = Reminder::all();
        $reminders = [];
        foreach ($get as $currentReminder) {
            $reminder = new ReminderObj($currentReminder->title, $currentReminder->body );
            $reminder->id = $currentReminder->id;
            $reminders[] = $reminder;
        }
        return $reminders;
    }

    //reminder ophalen bij id
    public function getReminderByID($id)
    {
        $get = Reminder::find($id);
        $reminder = new ReminderObj($get->title, $get->body);
        $reminder->id = $id;
        return $reminder;
    }

    //reminder toevoegen
    public function addReminder(ReminderObj $reminder)
    {
        $newReminder = new Reminder();
        $newReminder->title = $reminder->title;
        $newReminder->body = $reminder->body;
        $newReminder->save();
    }

    //Reminder verwijderen
    public function deleteReminderByID($id)
    {
        $reminder = Reminder::find($id);
        $reminder->delete();

    }

    //Reminder bewerken
    public function editReminderByID(ReminderObj $reminder, $id)
    {
        $editReminder = Reminder::find($id);
        $editReminder->title = $reminder->title;
        $editReminder->body = $reminder->body;
        $editReminder->save();
    }
}
