<?php

namespace App\Http\Controllers;

use App\Classes\DatabaseHandler;
use App\Objects\ReminderObj;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public $databaseHandler;

    public function __construct()
    {
        $this->databaseHandler = new DatabaseHandler();
    }

    //Haal alle reminders op
    public function getReminders()
    {
        $reminders = $this->databaseHandler->getReminders();
        return $reminders;
    }

    public function getReminderByID($id)
    {
        $reminder = $this->databaseHandler->getReminderByID($id);
        return \Response::json($reminder);
    }

    public function addReminder(Request $request)
    {
        $reminder = new ReminderObj($request->title, $request->body);
        $this->databaseHandler->addReminder($reminder);
        return \Response::json($reminder);
    }

    public function deleteReminderByID($id)
    {
        $deletedReminder = $this->databaseHandler->deleteReminderByID($id);
        return $deletedReminder;
    }

    public function editReminderByID($id, Request $request)
    {
        $reminder = new ReminderObj($request->title, $request->body);
        $this->databaseHandler->editReminderByID($reminder, $id);
        return \Response::json($reminder);
    }
}
