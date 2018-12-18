<?php

namespace App\Interfaces;

use App\Objects\ReminderObj;

interface DatabaseHandlerInterface
{
    public function getReminders();

    public function getReminderByID($id);

    public function addReminder(ReminderObj $reminder);

    public function deleteReminderByID($id);

    public function editReminderByID(ReminderObj $reminder, $id);

}
