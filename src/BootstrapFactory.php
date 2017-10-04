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

use Replum\FontAwesome\Icon;
use Replum\Html\HtmlElement;
use Replum\HtmlFactory as Html;

abstract class BootstrapFactory
{
    public static function cardWithIcon(string $title, Icon $icon = null, HtmlElement ...$elements)
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
                                $headline = Html::h3()
                                    ->addClass('title')
                            )
                    )
            )
        ;

        if ($icon !== null) {
            $headline->add($icon);
        }
        $headline->add(Html::text($title));

        foreach ($elements as $element) {
            $cardBlock->add($element);
        }

        return $card;
    }

    public static function card(string $title, HtmlElement ...$elements)
    {
        return self::cardWithIcon($title, null, ...$elements);
    }
}
