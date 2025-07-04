<?php

/**
 * PHP TERRANET MONITORING
 * Monitor your servers and websites.
 *
 * This file is part of PHP TERRANET MONITORING.
 * PHP TERRANET MONITORING is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP TERRANET MONITORING is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP TERRANET MONITORING.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Pepijn Over <pep@mailbox.org>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.5.2
 * @link        http://www.phpservermonitor.org/
 * @since       phpservermon 3.2
 **/

namespace psm\Module\User\EventListener;

use psm\Module\User\UserEvents;
use psm\Module\User\Event\UserEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            UserEvents::USER_ADD => array('onUserAdd', 0),
            UserEvents::USER_EDIT => array('onUserEdit', 0),
            UserEvents::USER_DELETE => array('onUserDelete', 0),
        );
    }

    public function onUserAdd(UserEvent $event)
    {
    }

    public function onUserEdit(UserEvent $event)
    {
    }

    public function onUserDelete(UserEvent $event)
    {
    }
}
