<?php

/*
 * This file is part of Replum: the web widget framework.
 *
 * Copyright (c) Dennis Birkholz <dennis@birkholz.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Replum\Bootstrap4;

use \Replum\ContextInterface;
use \Replum\Html\StyleSheetLink;
use \Replum\Html\ScriptLink;

abstract class Page extends \Replum\Html\Page
{
    public function __construct(ContextInterface $context, string $pageId = null, $useTheme = true)
    {
        parent::__construct($context, $pageId);

        if ($useTheme) {
            $this->addStyleSheet((new StyleSheetLink())->setUrl($context->getUrlPrefix() . '/vendor/components/bootstrap/css/bootstrap.css'));
        }
        //$this->addStyleSheet((new StyleSheetLink())->setUrl('/components/bootstrap/css/bootstrap-theme.css'));
        //$this->addStyleSheet((new StyleSheetLink())->setUrl('/components/bootstrap-datepicker/css/datepicker3.css'));

        $this->addScript((new ScriptLink())->setUrl($context->getUrlPrefix() . '/vendor/components/jquery/jquery.js'));
        $this->addScript((new ScriptLink())->setUrl($context->getUrlPrefix() . '/vendor/replum/bootstrap4-widgets/js/tether.js'));
        $this->addScript((new ScriptLink())->setUrl($context->getUrlPrefix() . '/vendor/components/bootstrap/js/bootstrap.js'));
        //$this->addScript((new ScriptLink())->setUrl('/components/bootstrap-datepicker/js/bootstrap-datepicker.js'));
        //$this->addScript((new ScriptLink())->setUrl('/components/bootstrap-datepicker/js/locales/bootstrap-datepicker.de.js'));
    }
}