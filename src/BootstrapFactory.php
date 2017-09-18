<?php
/**
 * This file is part of Replum: the web widget framework.
 *
 * Copyright (c) Dennis Birkholz <dennis@birkholz.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Replum\Bootstrap4;

use Replum\Html\HtmlElement;
use Replum\HtmlFactory as Html;

abstract class BootstrapFactory
{
    public static function card(string $title, HtmlElement ...$elements)
    {
        $card = Html::div()
            ->addClass('card')
            ->add(
                $cardBlock = Html::div()
                    ->addClass('card-block')
                    ->add(
                        Html::div()
                            ->addClass('card-title-block')
                            ->add(
                                Html::h3()
                                    ->addClass('title')
                                    ->add(Html::text($title))
                            )
                    )
            )
        ;

        foreach ($elements as $element) {
            $cardBlock->add($element);
        }

        return $card;
    }
}
