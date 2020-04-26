<?php

function presentPrice($price) {
    $nf = new NumberFormatter('en', NumberFormatter::CURRENCY);
    return $nf->formatCurrency($price, 'USD');
}
