<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://freelancehunt.com/freelancer/Soyler.html
 * @since      1.0.0
 *
 * @package    Videosurfpro
 * @subpackage Videosurfpro/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700");*,*::after,*::before{box-sizing:inherit}*{font:inherit}html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video,hr{margin:0;padding:0;border:0}html{box-sizing:border-box}body{background-color:hsl(0, 0%, 100%);background-color:var(--color-bg, white)}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,main,form legend{display:block}ol,ul{list-style:none}blockquote,q{quotes:none}button,input,textarea,select{margin:0}.btn,.form-control,.link,.reset{background-color:transparent;padding:0;border:0;border-radius:0;color:inherit;line-height:inherit;-webkit-appearance:none;-moz-appearance:none;appearance:none}select.form-control::-ms-expand{display:none}textarea{resize:vertical;overflow:auto;vertical-align:top}input::-ms-clear{display:none}table{border-collapse:collapse;border-spacing:0}img,video,svg{max-width:100%}[data-theme]{background-color:hsl(0, 0%, 100%);background-color:var(--color-bg, #fff);color:hsl(240, 4%, 20%);color:var(--color-contrast-high, #313135)}:root{--space-unit:  1em;--space-xxxxs: calc(0.125*var(--space-unit));--space-xxxs:  calc(0.25*var(--space-unit));--space-xxs:   calc(0.375*var(--space-unit));--space-xs:    calc(0.5*var(--space-unit));--space-sm:    calc(0.75*var(--space-unit));--space-md:    calc(1.25*var(--space-unit));--space-lg:    calc(2*var(--space-unit));--space-xl:    calc(3.25*var(--space-unit));--space-xxl:   calc(5.25*var(--space-unit));--space-xxxl:  calc(8.5*var(--space-unit));--space-xxxxl: calc(13.75*var(--space-unit));--component-padding: var(--space-md)}:root{--max-width-xxs: 32rem;--max-width-xs:  38rem;--max-width-sm:  48rem;--max-width-md:  64rem;--max-width-lg:  80rem;--max-width-xl:  90rem;--max-width-xxl: 120rem}.container{width:calc(100% - 1.25em);width:calc(100% - 2*var(--component-padding));margin-left:auto;margin-right:auto}.max-width-xxs{max-width:32rem;max-width:var(--max-width-xxs)}.max-width-xs{max-width:38rem;max-width:var(--max-width-xs)}.max-width-sm{max-width:48rem;max-width:var(--max-width-sm)}.max-width-md{max-width:64rem;max-width:var(--max-width-md)}.max-width-lg{max-width:80rem;max-width:var(--max-width-lg)}.max-width-xl{max-width:90rem;max-width:var(--max-width-xl)}.max-width-xxl{max-width:120rem;max-width:var(--max-width-xxl)}.max-width-adaptive-sm{max-width:38rem;max-width:var(--max-width-xs)}@media (min-width: 64rem){.max-width-adaptive-sm{max-width:48rem;max-width:var(--max-width-sm)}}.max-width-adaptive-md{max-width:38rem;max-width:var(--max-width-xs)}@media (min-width: 64rem){.max-width-adaptive-md{max-width:64rem;max-width:var(--max-width-md)}}.max-width-adaptive,.max-width-adaptive-lg{max-width:38rem;max-width:var(--max-width-xs)}@media (min-width: 64rem){.max-width-adaptive,.max-width-adaptive-lg{max-width:64rem;max-width:var(--max-width-md)}}@media (min-width: 90rem){.max-width-adaptive,.max-width-adaptive-lg{max-width:80rem;max-width:var(--max-width-lg)}}.max-width-adaptive-xl{max-width:38rem;max-width:var(--max-width-xs)}@media (min-width: 64rem){.max-width-adaptive-xl{max-width:64rem;max-width:var(--max-width-md)}}@media (min-width: 90rem){.max-width-adaptive-xl{max-width:90rem;max-width:var(--max-width-xl)}}.grid{--grid-gap: 0px;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.grid>*{-ms-flex-preferred-size:100%;flex-basis:100%}[class*="grid-gap"]{margin-bottom:1em * -1;margin-bottom:calc(var(--grid-gap, 1em)*-1);margin-right:1em * -1;margin-right:calc(var(--grid-gap, 1em)*-1)}[class*="grid-gap"]>*{margin-bottom:1em;margin-bottom:var(--grid-gap, 1em);margin-right:1em;margin-right:var(--grid-gap, 1em)}.grid-gap-xxxxs{--grid-gap: var(--space-xxxxs)}.grid-gap-xxxs{--grid-gap: var(--space-xxxs)}.grid-gap-xxs{--grid-gap: var(--space-xxs)}.grid-gap-xs{--grid-gap: var(--space-xs)}.grid-gap-sm{--grid-gap: var(--space-sm)}.grid-gap-md{--grid-gap: var(--space-md)}.grid-gap-lg{--grid-gap: var(--space-lg)}.grid-gap-xl{--grid-gap: var(--space-xl)}.grid-gap-xxl{--grid-gap: var(--space-xxl)}.grid-gap-xxxl{--grid-gap: var(--space-xxxl)}.grid-gap-xxxxl{--grid-gap: var(--space-xxxxl)}.col{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}@media (min-width: 32rem){.col\@xs{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1\@xs{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2\@xs{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3\@xs{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4\@xs{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5\@xs{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6\@xs{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7\@xs{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8\@xs{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9\@xs{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10\@xs{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11\@xs{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12\@xs{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}}@media (min-width: 48rem){.col\@sm{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1\@sm{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2\@sm{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3\@sm{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4\@sm{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5\@sm{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6\@sm{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7\@sm{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8\@sm{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9\@sm{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10\@sm{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11\@sm{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12\@sm{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}}@media (min-width: 64rem){.col\@md{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1\@md{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2\@md{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3\@md{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4\@md{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5\@md{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6\@md{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7\@md{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8\@md{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9\@md{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10\@md{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11\@md{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12\@md{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}}@media (min-width: 80rem){.col\@lg{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1\@lg{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2\@lg{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3\@lg{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4\@lg{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5\@lg{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6\@lg{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7\@lg{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8\@lg{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9\@lg{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10\@lg{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11\@lg{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12\@lg{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}}@media (min-width: 90rem){.col\@xl{-ms-flex-positive:1;flex-grow:1;-ms-flex-preferred-size:0;flex-basis:0;max-width:100%}.col-1\@xl{-ms-flex-preferred-size:calc(8.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(8.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(8.33% - 0.01px - 1em);flex-basis:calc(8.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(8.33% - 0.01px - 1em);max-width:calc(8.33% - 0.01px - var(--grid-gap, 1em))}.col-2\@xl{-ms-flex-preferred-size:calc(16.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(16.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(16.66% - 0.01px - 1em);flex-basis:calc(16.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(16.66% - 0.01px - 1em);max-width:calc(16.66% - 0.01px - var(--grid-gap, 1em))}.col-3\@xl{-ms-flex-preferred-size:calc(25% - 0.01px - 1em);-ms-flex-preferred-size:calc(25% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(25% - 0.01px - 1em);flex-basis:calc(25% - 0.01px - var(--grid-gap, 1em));max-width:calc(25% - 0.01px - 1em);max-width:calc(25% - 0.01px - var(--grid-gap, 1em))}.col-4\@xl{-ms-flex-preferred-size:calc(33.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(33.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(33.33% - 0.01px - 1em);flex-basis:calc(33.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(33.33% - 0.01px - 1em);max-width:calc(33.33% - 0.01px - var(--grid-gap, 1em))}.col-5\@xl{-ms-flex-preferred-size:calc(41.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(41.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(41.66% - 0.01px - 1em);flex-basis:calc(41.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(41.66% - 0.01px - 1em);max-width:calc(41.66% - 0.01px - var(--grid-gap, 1em))}.col-6\@xl{-ms-flex-preferred-size:calc(50% - 0.01px - 1em);-ms-flex-preferred-size:calc(50% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(50% - 0.01px - 1em);flex-basis:calc(50% - 0.01px - var(--grid-gap, 1em));max-width:calc(50% - 0.01px - 1em);max-width:calc(50% - 0.01px - var(--grid-gap, 1em))}.col-7\@xl{-ms-flex-preferred-size:calc(58.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(58.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(58.33% - 0.01px - 1em);flex-basis:calc(58.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(58.33% - 0.01px - 1em);max-width:calc(58.33% - 0.01px - var(--grid-gap, 1em))}.col-8\@xl{-ms-flex-preferred-size:calc(66.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(66.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(66.66% - 0.01px - 1em);flex-basis:calc(66.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(66.66% - 0.01px - 1em);max-width:calc(66.66% - 0.01px - var(--grid-gap, 1em))}.col-9\@xl{-ms-flex-preferred-size:calc(75% - 0.01px - 1em);-ms-flex-preferred-size:calc(75% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(75% - 0.01px - 1em);flex-basis:calc(75% - 0.01px - var(--grid-gap, 1em));max-width:calc(75% - 0.01px - 1em);max-width:calc(75% - 0.01px - var(--grid-gap, 1em))}.col-10\@xl{-ms-flex-preferred-size:calc(83.33% - 0.01px - 1em);-ms-flex-preferred-size:calc(83.33% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(83.33% - 0.01px - 1em);flex-basis:calc(83.33% - 0.01px - var(--grid-gap, 1em));max-width:calc(83.33% - 0.01px - 1em);max-width:calc(83.33% - 0.01px - var(--grid-gap, 1em))}.col-11\@xl{-ms-flex-preferred-size:calc(91.66% - 0.01px - 1em);-ms-flex-preferred-size:calc(91.66% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(91.66% - 0.01px - 1em);flex-basis:calc(91.66% - 0.01px - var(--grid-gap, 1em));max-width:calc(91.66% - 0.01px - 1em);max-width:calc(91.66% - 0.01px - var(--grid-gap, 1em))}.col-12\@xl{-ms-flex-preferred-size:calc(100% - 0.01px - 1em);-ms-flex-preferred-size:calc(100% - 0.01px - var(--grid-gap, 1em));flex-basis:calc(100% - 0.01px - 1em);flex-basis:calc(100% - 0.01px - var(--grid-gap, 1em));max-width:calc(100% - 0.01px - 1em);max-width:calc(100% - 0.01px - var(--grid-gap, 1em))}}:root{--radius-sm: calc(var(--radius, 0.25em)/2);--radius-md: var(--radius, 0.25em);--radius-lg: calc(var(--radius, 0.25em)*2);--shadow-sm: 0 1px 2px rgba(0, 0, 0, .085), 0 1px 8px rgba(0, 0, 0, .1);--shadow-md: 0 1px 8px rgba(0, 0, 0, .1), 0 8px 24px rgba(0, 0, 0, .15);--shadow-lg: 0 1px 8px rgba(0, 0, 0, .1), 0 16px 48px rgba(0, 0, 0, .1), 0 24px 60px rgba(0, 0, 0, .1);--bounce: cubic-bezier(0.175, 0.885, 0.32, 1.275);--ease-in-out: cubic-bezier(0.645, 0.045, 0.355, 1);--ease-in: cubic-bezier(0.55, 0.055, 0.675, 0.19);--ease-out: cubic-bezier(0.215, 0.61, 0.355, 1)}:root{--body-line-height: 1.4;--heading-line-height: 1.2}body{font-size:1em;font-size:var(--text-base-size, 1em);font-family:'Open Sans', sans-serif;font-family:var(--font-primary, sans-serif);color:hsl(240, 4%, 20%);color:var(--color-contrast-high, #313135)}h1,h2,h3,h4{color:hsl(240, 8%, 12%);color:var(--color-contrast-higher, #1c1c21);line-height:1.2;line-height:var(--heading-line-height, 1.2)}.text-xxxl{font-size:2.48832em;font-size:var(--text-xxxl, 2.488em)}h1,.text-xxl{font-size:2.0736em;font-size:var(--text-xxl, 2.074em)}h2,.text-xl{font-size:1.728em;font-size:var(--text-xl, 1.728em)}h3,.text-lg{font-size:1.44em;font-size:var(--text-lg, 1.44em)}h4,.text-md{font-size:1.2em;font-size:var(--text-md, 1.2em)}small,.text-sm{font-size:0.83333em;font-size:var(--text-sm, 0.833em)}.text-xs{font-size:0.69444em;font-size:var(--text-xs, 0.694em)}a,.link{color:hsl(220, 90%, 56%);color:var(--color-primary, #2a6df4);text-decoration:underline}strong,.text-bold{font-weight:bold}s{text-decoration:line-through}u,.text-underline{text-decoration:underline}.text-component{--component-body-line-height: calc(var(--body-line-height)*var(--line-height-multiplier, 1));--component-heading-line-height: calc(var(--heading-line-height)*var(--line-height-multiplier, 1))}.text-component h1,.text-component h2,.text-component h3,.text-component h4{line-height:1.2;line-height:var(--component-heading-line-height, 1.2);margin-bottom:0.25em;margin-bottom:calc(var(--space-xxxs)*var(--text-vspace-multiplier, 1))}.text-component h2,.text-component h3,.text-component h4{margin-top:0.75em;margin-top:calc(var(--space-sm)*var(--text-vspace-multiplier, 1))}.text-component p,.text-component blockquote,.text-component ul li,.text-component ol li{line-height:1.4;line-height:var(--component-body-line-height)}.text-component ul,.text-component ol,.text-component p,.text-component blockquote,.text-component .text-component__block{margin-bottom:0.75em;margin-bottom:calc(var(--space-sm)*var(--text-vspace-multiplier, 1))}.text-component ul,.text-component ol{padding-left:1em}.text-component ul{list-style-type:disc}.text-component ol{list-style-type:decimal}.text-component img{display:block;margin:0 auto}.text-component figcaption{text-align:center;margin-top:0.5em;margin-top:var(--space-xs)}.text-component em{font-style:italic}.text-component hr{margin-top:2em;margin-top:calc(var(--space-lg)*var(--text-vspace-multiplier, 1));margin-bottom:2em;margin-bottom:calc(var(--space-lg)*var(--text-vspace-multiplier, 1));margin-left:auto;margin-right:auto}.text-component>*:first-child{margin-top:0}.text-component>*:last-child{margin-bottom:0}.text-component__block--full-width{width:100vw;margin-left:calc(50% - 50vw)}@media (min-width: 48rem){.text-component__block--left,.text-component__block--right{width:45%}.text-component__block--left img,.text-component__block--right img{width:100%}.text-component__block--left{float:left;margin-right:0.75em;margin-right:calc(var(--space-sm)*var(--text-vspace-multiplier, 1))}.text-component__block--right{float:right;margin-left:0.75em;margin-left:calc(var(--space-sm)*var(--text-vspace-multiplier, 1))}}@media (min-width: 90rem){.text-component__block--outset{width:calc(100% + 10.5em);width:calc(100% + 2*var(--space-xxl))}.text-component__block--outset img{width:100%}.text-component__block--outset:not(.text-component__block--right){margin-left:-5.25em;margin-left:calc(-1*var(--space-xxl))}.text-component__block--left,.text-component__block--right{width:50%}.text-component__block--right.text-component__block--outset{margin-right:-5.25em;margin-right:calc(-1*var(--space-xxl))}}:root{--icon-xxs: 12px;--icon-xs:  16px;--icon-sm:  24px;--icon-md:  32px;--icon-lg:  48px;--icon-xl:  64px;--icon-xxl: 128px}.icon{display:inline-block;color:inherit;fill:currentColor;height:1em;width:1em;line-height:1;-ms-flex-negative:0;flex-shrink:0}.icon--xxs{font-size:12px;font-size:var(--icon-xxs)}.icon--xs{font-size:16px;font-size:var(--icon-xs)}.icon--sm{font-size:24px;font-size:var(--icon-sm)}.icon--md{font-size:32px;font-size:var(--icon-md)}.icon--lg{font-size:48px;font-size:var(--icon-lg)}.icon--xl{font-size:64px;font-size:var(--icon-xl)}.icon--xxl{font-size:128px;font-size:var(--icon-xxl)}.icon--is-spinning{-webkit-animation:icon-spin 1s infinite linear;animation:icon-spin 1s infinite linear}@-webkit-keyframes icon-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes icon-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.icon use{color:inherit;fill:currentColor}.btn{position:relative;display:-ms-inline-flexbox;display:inline-flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;white-space:nowrap;text-decoration:none;line-height:1;font-size:1em;font-size:var(--btn-font-size, 1em);padding-top:0.5em;padding-top:var(--btn-padding-y, 0.5em);padding-bottom:0.5em;padding-bottom:var(--btn-padding-y, 0.5em);padding-left:0.75em;padding-left:var(--btn-padding-x, 0.75em);padding-right:0.75em;padding-right:var(--btn-padding-x, 0.75em);border-radius:0.25em;border-radius:var(--btn-radius, 0.25em)}.btn--primary{background-color:hsl(220, 90%, 56%);background-color:var(--color-primary, #2a6df4);color:hsl(0, 0%, 100%);color:var(--color-white, #fff)}.btn--subtle{background-color:hsl(240, 1%, 83%);background-color:var(--color-contrast-low, #d3d3d4);color:hsl(240, 8%, 12%);color:var(--color-contrast-higher, #1c1c21)}.btn--accent{background-color:hsl(355, 90%, 61%);background-color:var(--color-accent, #f54251);color:hsl(0, 0%, 100%);color:var(--color-white, #fff)}.btn--disabled{cursor:not-allowed}.btn--sm{font-size:0.8em;font-size:var(--btn-font-size-sm, 0.8em)}.btn--md{font-size:1.2em;font-size:var(--btn-font-size-md, 1.2em)}.btn--lg{font-size:1.4em;font-size:var(--btn-font-size-lg, 1.4em)}.btn--icon{padding:0.5em;padding:var(--btn-padding-y, 0.5em)}.form-control{background-color:hsl(0, 0%, 100%);background-color:var(--color-bg, #f2f2f2);padding-top:0.5em;padding-top:var(--form-control-padding-y, 0.5em);padding-bottom:0.5em;padding-bottom:var(--form-control-padding-y, 0.5em);padding-left:0.75em;padding-left:var(--form-control-padding-x, 0.75em);padding-right:0.75em;padding-right:var(--form-control-padding-x, 0.75em);border-radius:0.25em;border-radius:var(--form-control-radius, 0.25em)}.form-control::-webkit-input-placeholder{color:hsl(240, 1%, 48%);color:var(--color-contrast-medium, #79797c)}.form-control::-moz-placeholder{opacity:1;color:hsl(240, 1%, 48%);color:var(--color-contrast-medium, #79797c)}.form-control:-ms-input-placeholder{color:hsl(240, 1%, 48%);color:var(--color-contrast-medium, #79797c)}.form-control:-moz-placeholder{color:hsl(240, 1%, 48%);color:var(--color-contrast-medium, #79797c)}.form-control[disabled],.form-control[readonly]{cursor:not-allowed}.form-legend{color:hsl(240, 8%, 12%);color:var(--color-contrast-higher, #1c1c21);line-height:1.2;font-size:1.2em;font-size:var(--text-md, 1.2em);margin-bottom:0.375em;margin-bottom:var(--space-xxs)}.form-label{display:inline-block}.form__msg-error{background-color:hsl(355, 90%, 61%);background-color:var(--color-error, #f54251);color:hsl(0, 0%, 100%);color:var(--color-white, #fff);font-size:0.83333em;font-size:var(--text-sm, 0.833em);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0.5em;padding:var(--space-xs);margin-top:0.75em;margin-top:var(--space-sm);border-radius:0.25em;border-radius:var(--radius-md, 0.25em);position:absolute;clip:rect(1px, 1px, 1px, 1px)}.form__msg-error::before{content:'';position:absolute;left:0.75em;left:var(--space-sm);top:0;-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%);width:0;height:0;border:8px solid transparent;border-bottom-color:hsl(355, 90%, 61%);border-bottom-color:var(--color-error)}.form__msg-error--is-visible{position:relative;clip:auto}.radio-list>*,.checkbox-list>*{position:relative;display:-ms-flexbox;display:flex;-ms-flex-align:baseline;align-items:baseline;margin-bottom:0.375em;margin-bottom:var(--space-xxs)}.radio-list>*:last-of-type,.checkbox-list>*:last-of-type{margin-bottom:0}.radio-list label,.checkbox-list label{line-height:1.4;line-height:var(--body-line-height);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.radio-list input,.checkbox-list input{vertical-align:top;margin-right:0.25em;margin-right:var(--space-xxxs);-ms-flex-negative:0;flex-shrink:0}:root{--zindex-header: 2;--zindex-popover: 5;--zindex-fixed-element: 10;--zindex-overlay: 15}@media not all and (min-width: 32rem){.display\@xs{display:none !important}}@media (min-width: 32rem){.hide\@xs{display:none !important}}@media not all and (min-width: 48rem){.display\@sm{display:none !important}}@media (min-width: 48rem){.hide\@sm{display:none !important}}@media not all and (min-width: 64rem){.display\@md{display:none !important}}@media (min-width: 64rem){.hide\@md{display:none !important}}@media not all and (min-width: 80rem){.display\@lg{display:none !important}}@media (min-width: 80rem){.hide\@lg{display:none !important}}@media not all and (min-width: 90rem){.display\@xl{display:none !important}}@media (min-width: 90rem){.hide\@xl{display:none !important}}:root{--display: block}.is-visible{display:block !important;display:var(--display) !important}.is-hidden{display:none !important}.sr-only{position:absolute;clip:rect(1px, 1px, 1px, 1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);width:1px;height:1px;overflow:hidden;padding:0;border:0;white-space:nowrap}.flex{display:-ms-flexbox;display:flex}.inline-flex{display:-ms-inline-flexbox;display:inline-flex}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column{-ms-flex-direction:column;flex-direction:column}.flex-row{-ms-flex-direction:row;flex-direction:row}.flex-center{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start{-ms-flex-pack:start;justify-content:flex-start}.justify-end{-ms-flex-pack:end;justify-content:flex-end}.justify-center{-ms-flex-pack:center;justify-content:center}.justify-between{-ms-flex-pack:justify;justify-content:space-between}.items-center{-ms-flex-align:center;align-items:center}.items-start{-ms-flex-align:start;align-items:flex-start}.items-end{-ms-flex-align:end;align-items:flex-end}@media (min-width: 32rem){.flex-wrap\@xs{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column\@xs{-ms-flex-direction:column;flex-direction:column}.flex-row\@xs{-ms-flex-direction:row;flex-direction:row}.flex-center\@xs{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start\@xs{-ms-flex-pack:start;justify-content:flex-start}.justify-end\@xs{-ms-flex-pack:end;justify-content:flex-end}.justify-center\@xs{-ms-flex-pack:center;justify-content:center}.justify-between\@xs{-ms-flex-pack:justify;justify-content:space-between}.items-center\@xs{-ms-flex-align:center;align-items:center}.items-start\@xs{-ms-flex-align:start;align-items:flex-start}.items-end\@xs{-ms-flex-align:end;align-items:flex-end}}@media (min-width: 48rem){.flex-wrap\@sm{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column\@sm{-ms-flex-direction:column;flex-direction:column}.flex-row\@sm{-ms-flex-direction:row;flex-direction:row}.flex-center\@sm{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start\@sm{-ms-flex-pack:start;justify-content:flex-start}.justify-end\@sm{-ms-flex-pack:end;justify-content:flex-end}.justify-center\@sm{-ms-flex-pack:center;justify-content:center}.justify-between\@sm{-ms-flex-pack:justify;justify-content:space-between}.items-center\@sm{-ms-flex-align:center;align-items:center}.items-start\@sm{-ms-flex-align:start;align-items:flex-start}.items-end\@sm{-ms-flex-align:end;align-items:flex-end}}@media (min-width: 64rem){.flex-wrap\@md{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column\@md{-ms-flex-direction:column;flex-direction:column}.flex-row\@md{-ms-flex-direction:row;flex-direction:row}.flex-center\@md{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start\@md{-ms-flex-pack:start;justify-content:flex-start}.justify-end\@md{-ms-flex-pack:end;justify-content:flex-end}.justify-center\@md{-ms-flex-pack:center;justify-content:center}.justify-between\@md{-ms-flex-pack:justify;justify-content:space-between}.items-center\@md{-ms-flex-align:center;align-items:center}.items-start\@md{-ms-flex-align:start;align-items:flex-start}.items-end\@md{-ms-flex-align:end;align-items:flex-end}}@media (min-width: 80rem){.flex-wrap\@lg{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column\@lg{-ms-flex-direction:column;flex-direction:column}.flex-row\@lg{-ms-flex-direction:row;flex-direction:row}.flex-center\@lg{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start\@lg{-ms-flex-pack:start;justify-content:flex-start}.justify-end\@lg{-ms-flex-pack:end;justify-content:flex-end}.justify-center\@lg{-ms-flex-pack:center;justify-content:center}.justify-between\@lg{-ms-flex-pack:justify;justify-content:space-between}.items-center\@lg{-ms-flex-align:center;align-items:center}.items-start\@lg{-ms-flex-align:start;align-items:flex-start}.items-end\@lg{-ms-flex-align:end;align-items:flex-end}}@media (min-width: 90rem){.flex-wrap\@xl{-ms-flex-wrap:wrap;flex-wrap:wrap}.flex-column\@xl{-ms-flex-direction:column;flex-direction:column}.flex-row\@xl{-ms-flex-direction:row;flex-direction:row}.flex-center\@xl{-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.justify-start\@xl{-ms-flex-pack:start;justify-content:flex-start}.justify-end\@xl{-ms-flex-pack:end;justify-content:flex-end}.justify-center\@xl{-ms-flex-pack:center;justify-content:center}.justify-between\@xl{-ms-flex-pack:justify;justify-content:space-between}.items-center\@xl{-ms-flex-align:center;align-items:center}.items-start\@xl{-ms-flex-align:start;align-items:flex-start}.items-end\@xl{-ms-flex-align:end;align-items:flex-end}}.flex-grow{-ms-flex-positive:1;flex-grow:1}.flex-shrink-0{-ms-flex-negative:0;flex-shrink:0}.flex-gap-xxxs{margin-bottom:-0.25em;margin-bottom:calc(-1*var(--space-xxxs));margin-right:-0.25em;margin-right:calc(-1*var(--space-xxxs))}.flex-gap-xxxs>*{margin-bottom:0.25em;margin-bottom:var(--space-xxxs);margin-right:0.25em;margin-right:var(--space-xxxs)}.flex-gap-xxs{margin-bottom:-0.375em;margin-bottom:calc(-1*var(--space-xxs));margin-right:-0.375em;margin-right:calc(-1*var(--space-xxs))}.flex-gap-xxs>*{margin-bottom:0.375em;margin-bottom:var(--space-xxs);margin-right:0.375em;margin-right:var(--space-xxs)}.flex-gap-xs{margin-bottom:-0.5em;margin-bottom:calc(-1*var(--space-xs));margin-right:-0.5em;margin-right:calc(-1*var(--space-xs))}.flex-gap-xs>*{margin-bottom:0.5em;margin-bottom:var(--space-xs);margin-right:0.5em;margin-right:var(--space-xs)}.flex-gap-sm{margin-bottom:-0.75em;margin-bottom:calc(-1*var(--space-sm));margin-right:-0.75em;margin-right:calc(-1*var(--space-sm))}.flex-gap-sm>*{margin-bottom:0.75em;margin-bottom:var(--space-sm);margin-right:0.75em;margin-right:var(--space-sm)}.flex-gap-md{margin-bottom:-1.25em;margin-bottom:calc(-1*var(--space-md));margin-right:-1.25em;margin-right:calc(-1*var(--space-md))}.flex-gap-md>*{margin-bottom:1.25em;margin-bottom:var(--space-md);margin-right:1.25em;margin-right:var(--space-md)}.flex-gap-lg{margin-bottom:-2em;margin-bottom:calc(-1*var(--space-lg));margin-right:-2em;margin-right:calc(-1*var(--space-lg))}.flex-gap-lg>*{margin-bottom:2em;margin-bottom:var(--space-lg);margin-right:2em;margin-right:var(--space-lg)}.flex-gap-xl{margin-bottom:-3.25em;margin-bottom:calc(-1*var(--space-xl));margin-right:-3.25em;margin-right:calc(-1*var(--space-xl))}.flex-gap-xl>*{margin-bottom:3.25em;margin-bottom:var(--space-xl);margin-right:3.25em;margin-right:var(--space-xl)}.flex-gap-xxl{margin-bottom:-5.25em;margin-bottom:calc(-1*var(--space-xxl));margin-right:-5.25em;margin-right:calc(-1*var(--space-xxl))}.flex-gap-xxl>*{margin-bottom:5.25em;margin-bottom:var(--space-xxl);margin-right:5.25em;margin-right:var(--space-xxl)}.margin-xxxxs{margin:0.125em;margin:var(--space-xxxxs)}.margin-xxxs{margin:0.25em;margin:var(--space-xxxs)}.margin-xxs{margin:0.375em;margin:var(--space-xxs)}.margin-xs{margin:0.5em;margin:var(--space-xs)}.margin-sm{margin:0.75em;margin:var(--space-sm)}.margin-md{margin:1.25em;margin:var(--space-md)}.margin-lg{margin:2em;margin:var(--space-lg)}.margin-xl{margin:3.25em;margin:var(--space-xl)}.margin-xxl{margin:5.25em;margin:var(--space-xxl)}.margin-xxxl{margin:8.5em;margin:var(--space-xxxl)}.margin-xxxxl{margin:13.75em;margin:var(--space-xxxxl)}.margin-auto{margin:auto}.margin-top-xxxxs{margin-top:0.125em;margin-top:var(--space-xxxxs)}.margin-top-xxxs{margin-top:0.25em;margin-top:var(--space-xxxs)}.margin-top-xxs{margin-top:0.375em;margin-top:var(--space-xxs)}.margin-top-xs{margin-top:0.5em;margin-top:var(--space-xs)}.margin-top-sm{margin-top:0.75em;margin-top:var(--space-sm)}.margin-top-md{margin-top:1.25em;margin-top:var(--space-md)}.margin-top-lg{margin-top:2em;margin-top:var(--space-lg)}.margin-top-xl{margin-top:3.25em;margin-top:var(--space-xl)}.margin-top-xxl{margin-top:5.25em;margin-top:var(--space-xxl)}.margin-top-xxxl{margin-top:8.5em;margin-top:var(--space-xxxl)}.margin-top-xxxxl{margin-top:13.75em;margin-top:var(--space-xxxxl)}.margin-top-auto{margin-top:auto}.margin-bottom-xxxxs{margin-bottom:0.125em;margin-bottom:var(--space-xxxxs)}.margin-bottom-xxxs{margin-bottom:0.25em;margin-bottom:var(--space-xxxs)}.margin-bottom-xxs{margin-bottom:0.375em;margin-bottom:var(--space-xxs)}.margin-bottom-xs{margin-bottom:0.5em;margin-bottom:var(--space-xs)}.margin-bottom-sm{margin-bottom:0.75em;margin-bottom:var(--space-sm)}.margin-bottom-md{margin-bottom:1.25em;margin-bottom:var(--space-md)}.margin-bottom-lg{margin-bottom:2em;margin-bottom:var(--space-lg)}.margin-bottom-xl{margin-bottom:3.25em;margin-bottom:var(--space-xl)}.margin-bottom-xxl{margin-bottom:5.25em;margin-bottom:var(--space-xxl)}.margin-bottom-xxxl{margin-bottom:8.5em;margin-bottom:var(--space-xxxl)}.margin-bottom-xxxxl{margin-bottom:13.75em;margin-bottom:var(--space-xxxxl)}.margin-bottom-auto{margin-bottom:auto}.margin-right-xxxxs{margin-right:0.125em;margin-right:var(--space-xxxxs)}.margin-right-xxxs{margin-right:0.25em;margin-right:var(--space-xxxs)}.margin-right-xxs{margin-right:0.375em;margin-right:var(--space-xxs)}.margin-right-xs{margin-right:0.5em;margin-right:var(--space-xs)}.margin-right-sm{margin-right:0.75em;margin-right:var(--space-sm)}.margin-right-md{margin-right:1.25em;margin-right:var(--space-md)}.margin-right-lg{margin-right:2em;margin-right:var(--space-lg)}.margin-right-xl{margin-right:3.25em;margin-right:var(--space-xl)}.margin-right-xxl{margin-right:5.25em;margin-right:var(--space-xxl)}.margin-right-xxxl{margin-right:8.5em;margin-right:var(--space-xxxl)}.margin-right-xxxxl{margin-right:13.75em;margin-right:var(--space-xxxxl)}.margin-right-auto{margin-right:auto}.margin-left-xxxxs{margin-left:0.125em;margin-left:var(--space-xxxxs)}.margin-left-xxxs{margin-left:0.25em;margin-left:var(--space-xxxs)}.margin-left-xxs{margin-left:0.375em;margin-left:var(--space-xxs)}.margin-left-xs{margin-left:0.5em;margin-left:var(--space-xs)}.margin-left-sm{margin-left:0.75em;margin-left:var(--space-sm)}.margin-left-md{margin-left:1.25em;margin-left:var(--space-md)}.margin-left-lg{margin-left:2em;margin-left:var(--space-lg)}.margin-left-xl{margin-left:3.25em;margin-left:var(--space-xl)}.margin-left-xxl{margin-left:5.25em;margin-left:var(--space-xxl)}.margin-left-xxxl{margin-left:8.5em;margin-left:var(--space-xxxl)}.margin-left-xxxxl{margin-left:13.75em;margin-left:var(--space-xxxxl)}.margin-left-auto{margin-left:auto}.margin-x-xxxxs{margin-left:0.125em;margin-left:var(--space-xxxxs);margin-right:0.125em;margin-right:var(--space-xxxxs)}.margin-x-xxxs{margin-left:0.25em;margin-left:var(--space-xxxs);margin-right:0.25em;margin-right:var(--space-xxxs)}.margin-x-xxs{margin-left:0.375em;margin-left:var(--space-xxs);margin-right:0.375em;margin-right:var(--space-xxs)}.margin-x-xs{margin-left:0.5em;margin-left:var(--space-xs);margin-right:0.5em;margin-right:var(--space-xs)}.margin-x-sm{margin-left:0.75em;margin-left:var(--space-sm);margin-right:0.75em;margin-right:var(--space-sm)}.margin-x-md{margin-left:1.25em;margin-left:var(--space-md);margin-right:1.25em;margin-right:var(--space-md)}.margin-x-lg{margin-left:2em;margin-left:var(--space-lg);margin-right:2em;margin-right:var(--space-lg)}.margin-x-xl{margin-left:3.25em;margin-left:var(--space-xl);margin-right:3.25em;margin-right:var(--space-xl)}.margin-x-xxl{margin-left:5.25em;margin-left:var(--space-xxl);margin-right:5.25em;margin-right:var(--space-xxl)}.margin-x-xxxl{margin-left:8.5em;margin-left:var(--space-xxxl);margin-right:8.5em;margin-right:var(--space-xxxl)}.margin-x-xxxxl{margin-left:13.75em;margin-left:var(--space-xxxxl);margin-right:13.75em;margin-right:var(--space-xxxxl)}.margin-x-auto{margin-left:auto;margin-right:auto}.margin-y-xxxxs{margin-top:0.125em;margin-top:var(--space-xxxxs);margin-bottom:0.125em;margin-bottom:var(--space-xxxxs)}.margin-y-xxxs{margin-top:0.25em;margin-top:var(--space-xxxs);margin-bottom:0.25em;margin-bottom:var(--space-xxxs)}.margin-y-xxs{margin-top:0.375em;margin-top:var(--space-xxs);margin-bottom:0.375em;margin-bottom:var(--space-xxs)}.margin-y-xs{margin-top:0.5em;margin-top:var(--space-xs);margin-bottom:0.5em;margin-bottom:var(--space-xs)}.margin-y-sm{margin-top:0.75em;margin-top:var(--space-sm);margin-bottom:0.75em;margin-bottom:var(--space-sm)}.margin-y-md{margin-top:1.25em;margin-top:var(--space-md);margin-bottom:1.25em;margin-bottom:var(--space-md)}.margin-y-lg{margin-top:2em;margin-top:var(--space-lg);margin-bottom:2em;margin-bottom:var(--space-lg)}.margin-y-xl{margin-top:3.25em;margin-top:var(--space-xl);margin-bottom:3.25em;margin-bottom:var(--space-xl)}.margin-y-xxl{margin-top:5.25em;margin-top:var(--space-xxl);margin-bottom:5.25em;margin-bottom:var(--space-xxl)}.margin-y-xxxl{margin-top:8.5em;margin-top:var(--space-xxxl);margin-bottom:8.5em;margin-bottom:var(--space-xxxl)}.margin-y-xxxxl{margin-top:13.75em;margin-top:var(--space-xxxxl);margin-bottom:13.75em;margin-bottom:var(--space-xxxxl)}.margin-y-auto{margin-top:auto;margin-bottom:auto}@media not all and (min-width: 32rem){.has-margin\@xs{margin:0 !important}}@media not all and (min-width: 48rem){.has-margin\@sm{margin:0 !important}}@media not all and (min-width: 64rem){.has-margin\@md{margin:0 !important}}@media not all and (min-width: 80rem){.has-margin\@lg{margin:0 !important}}@media not all and (min-width: 90rem){.has-margin\@xl{margin:0 !important}}.padding-md{padding:1.25em;padding:var(--space-md)}.padding-xxxxs{padding:0.125em;padding:var(--space-xxxxs)}.padding-xxxs{padding:0.25em;padding:var(--space-xxxs)}.padding-xxs{padding:0.375em;padding:var(--space-xxs)}.padding-xs{padding:0.5em;padding:var(--space-xs)}.padding-sm{padding:0.75em;padding:var(--space-sm)}.padding-lg{padding:2em;padding:var(--space-lg)}.padding-xl{padding:3.25em;padding:var(--space-xl)}.padding-xxl{padding:5.25em;padding:var(--space-xxl)}.padding-xxxl{padding:8.5em;padding:var(--space-xxxl)}.padding-xxxxl{padding:13.75em;padding:var(--space-xxxxl)}.padding-component{padding:1.25em;padding:var(--component-padding)}.padding-top-md{padding-top:1.25em;padding-top:var(--space-md)}.padding-top-xxxxs{padding-top:0.125em;padding-top:var(--space-xxxxs)}.padding-top-xxxs{padding-top:0.25em;padding-top:var(--space-xxxs)}.padding-top-xxs{padding-top:0.375em;padding-top:var(--space-xxs)}.padding-top-xs{padding-top:0.5em;padding-top:var(--space-xs)}.padding-top-sm{padding-top:0.75em;padding-top:var(--space-sm)}.padding-top-lg{padding-top:2em;padding-top:var(--space-lg)}.padding-top-xl{padding-top:3.25em;padding-top:var(--space-xl)}.padding-top-xxl{padding-top:5.25em;padding-top:var(--space-xxl)}.padding-top-xxxl{padding-top:8.5em;padding-top:var(--space-xxxl)}.padding-top-xxxxl{padding-top:13.75em;padding-top:var(--space-xxxxl)}.padding-top-component{padding-top:1.25em;padding-top:var(--component-padding)}.padding-bottom-md{padding-bottom:1.25em;padding-bottom:var(--space-md)}.padding-bottom-xxxxs{padding-bottom:0.125em;padding-bottom:var(--space-xxxxs)}.padding-bottom-xxxs{padding-bottom:0.25em;padding-bottom:var(--space-xxxs)}.padding-bottom-xxs{padding-bottom:0.375em;padding-bottom:var(--space-xxs)}.padding-bottom-xs{padding-bottom:0.5em;padding-bottom:var(--space-xs)}.padding-bottom-sm{padding-bottom:0.75em;padding-bottom:var(--space-sm)}.padding-bottom-lg{padding-bottom:2em;padding-bottom:var(--space-lg)}.padding-bottom-xl{padding-bottom:3.25em;padding-bottom:var(--space-xl)}.padding-bottom-xxl{padding-bottom:5.25em;padding-bottom:var(--space-xxl)}.padding-bottom-xxxl{padding-bottom:8.5em;padding-bottom:var(--space-xxxl)}.padding-bottom-xxxxl{padding-bottom:13.75em;padding-bottom:var(--space-xxxxl)}.padding-bottom-component{padding-bottom:1.25em;padding-bottom:var(--component-padding)}.padding-right-md{padding-right:1.25em;padding-right:var(--space-md)}.padding-right-xxxxs{padding-right:0.125em;padding-right:var(--space-xxxxs)}.padding-right-xxxs{padding-right:0.25em;padding-right:var(--space-xxxs)}.padding-right-xxs{padding-right:0.375em;padding-right:var(--space-xxs)}.padding-right-xs{padding-right:0.5em;padding-right:var(--space-xs)}.padding-right-sm{padding-right:0.75em;padding-right:var(--space-sm)}.padding-right-lg{padding-right:2em;padding-right:var(--space-lg)}.padding-right-xl{padding-right:3.25em;padding-right:var(--space-xl)}.padding-right-xxl{padding-right:5.25em;padding-right:var(--space-xxl)}.padding-right-xxxl{padding-right:8.5em;padding-right:var(--space-xxxl)}.padding-right-xxxxl{padding-right:13.75em;padding-right:var(--space-xxxxl)}.padding-right-component{padding-right:1.25em;padding-right:var(--component-padding)}.padding-left-md{padding-left:1.25em;padding-left:var(--space-md)}.padding-left-xxxxs{padding-left:0.125em;padding-left:var(--space-xxxxs)}.padding-left-xxxs{padding-left:0.25em;padding-left:var(--space-xxxs)}.padding-left-xxs{padding-left:0.375em;padding-left:var(--space-xxs)}.padding-left-xs{padding-left:0.5em;padding-left:var(--space-xs)}.padding-left-sm{padding-left:0.75em;padding-left:var(--space-sm)}.padding-left-lg{padding-left:2em;padding-left:var(--space-lg)}.padding-left-xl{padding-left:3.25em;padding-left:var(--space-xl)}.padding-left-xxl{padding-left:5.25em;padding-left:var(--space-xxl)}.padding-left-xxxl{padding-left:8.5em;padding-left:var(--space-xxxl)}.padding-left-xxxxl{padding-left:13.75em;padding-left:var(--space-xxxxl)}.padding-left-component{padding-left:1.25em;padding-left:var(--component-padding)}.padding-x-md{padding-left:1.25em;padding-left:var(--space-md);padding-right:1.25em;padding-right:var(--space-md)}.padding-x-xxxxs{padding-left:0.125em;padding-left:var(--space-xxxxs);padding-right:0.125em;padding-right:var(--space-xxxxs)}.padding-x-xxxs{padding-left:0.25em;padding-left:var(--space-xxxs);padding-right:0.25em;padding-right:var(--space-xxxs)}.padding-x-xxs{padding-left:0.375em;padding-left:var(--space-xxs);padding-right:0.375em;padding-right:var(--space-xxs)}.padding-x-xs{padding-left:0.5em;padding-left:var(--space-xs);padding-right:0.5em;padding-right:var(--space-xs)}.padding-x-sm{padding-left:0.75em;padding-left:var(--space-sm);padding-right:0.75em;padding-right:var(--space-sm)}.padding-x-lg{padding-left:2em;padding-left:var(--space-lg);padding-right:2em;padding-right:var(--space-lg)}.padding-x-xl{padding-left:3.25em;padding-left:var(--space-xl);padding-right:3.25em;padding-right:var(--space-xl)}.padding-x-xxl{padding-left:5.25em;padding-left:var(--space-xxl);padding-right:5.25em;padding-right:var(--space-xxl)}.padding-x-xxxl{padding-left:8.5em;padding-left:var(--space-xxxl);padding-right:8.5em;padding-right:var(--space-xxxl)}.padding-x-xxxxl{padding-left:13.75em;padding-left:var(--space-xxxxl);padding-right:13.75em;padding-right:var(--space-xxxxl)}.padding-x-component{padding-left:1.25em;padding-left:var(--component-padding);padding-right:1.25em;padding-right:var(--component-padding)}.padding-y-md{padding-top:1.25em;padding-top:var(--space-md);padding-bottom:1.25em;padding-bottom:var(--space-md)}.padding-y-xxxxs{padding-top:0.125em;padding-top:var(--space-xxxxs);padding-bottom:0.125em;padding-bottom:var(--space-xxxxs)}.padding-y-xxxs{padding-top:0.25em;padding-top:var(--space-xxxs);padding-bottom:0.25em;padding-bottom:var(--space-xxxs)}.padding-y-xxs{padding-top:0.375em;padding-top:var(--space-xxs);padding-bottom:0.375em;padding-bottom:var(--space-xxs)}.padding-y-xs{padding-top:0.5em;padding-top:var(--space-xs);padding-bottom:0.5em;padding-bottom:var(--space-xs)}.padding-y-sm{padding-top:0.75em;padding-top:var(--space-sm);padding-bottom:0.75em;padding-bottom:var(--space-sm)}.padding-y-lg{padding-top:2em;padding-top:var(--space-lg);padding-bottom:2em;padding-bottom:var(--space-lg)}.padding-y-xl{padding-top:3.25em;padding-top:var(--space-xl);padding-bottom:3.25em;padding-bottom:var(--space-xl)}.padding-y-xxl{padding-top:5.25em;padding-top:var(--space-xxl);padding-bottom:5.25em;padding-bottom:var(--space-xxl)}.padding-y-xxxl{padding-top:8.5em;padding-top:var(--space-xxxl);padding-bottom:8.5em;padding-bottom:var(--space-xxxl)}.padding-y-xxxxl{padding-top:13.75em;padding-top:var(--space-xxxxl);padding-bottom:13.75em;padding-bottom:var(--space-xxxxl)}.padding-y-component{padding-top:1.25em;padding-top:var(--component-padding);padding-bottom:1.25em;padding-bottom:var(--component-padding)}@media not all and (min-width: 32rem){.has-padding\@xs{padding:0 !important}}@media not all and (min-width: 48rem){.has-padding\@sm{padding:0 !important}}@media not all and (min-width: 64rem){.has-padding\@md{padding:0 !important}}@media not all and (min-width: 80rem){.has-padding\@lg{padding:0 !important}}@media not all and (min-width: 90rem){.has-padding\@xl{padding:0 !important}}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-replace{overflow:hidden;color:transparent;text-indent:100%;white-space:nowrap}.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}@media (min-width: 32rem){.text-center\@xs{text-align:center}.text-left\@xs{text-align:left}.text-right\@xs{text-align:right}}@media (min-width: 48rem){.text-center\@sm{text-align:center}.text-left\@sm{text-align:left}.text-right\@sm{text-align:right}}@media (min-width: 64rem){.text-center\@md{text-align:center}.text-left\@md{text-align:left}.text-right\@md{text-align:right}}@media (min-width: 80rem){.text-center\@lg{text-align:center}.text-left\@lg{text-align:left}.text-right\@lg{text-align:right}}@media (min-width: 90rem){.text-center\@xl{text-align:center}.text-left\@xl{text-align:left}.text-right\@xl{text-align:right}}.color-inherit{color:inherit}.color-contrast-medium{color:hsl(240, 1%, 48%);color:var(--color-contrast-medium, #79797c)}.color-contrast-high{color:hsl(240, 4%, 20%);color:var(--color-contrast-high, #313135)}.color-contrast-higher{color:hsl(240, 8%, 12%);color:var(--color-contrast-higher, #1c1c21)}.color-primary{color:hsl(220, 90%, 56%);color:var(--color-primary, #2a6df4)}.color-accent{color:hsl(355, 90%, 61%);color:var(--color-accent, #f54251)}.color-success{color:hsl(94, 48%, 56%);color:var(--color-success, #88c559)}.color-warning{color:hsl(46, 100%, 61%);color:var(--color-warning, #ffd138)}.color-error{color:hsl(355, 90%, 61%);color:var(--color-error, #f54251)}.width-100\%{width:100%}.height-100\%{height:100%}.media-wrapper{position:relative;height:0;padding-bottom:56.25%}.media-wrapper iframe,.media-wrapper video,.media-wrapper img{position:absolute;top:0;left:0;width:100%;height:100%}.media-wrapper video,.media-wrapper img{-o-object-fit:cover;object-fit:cover}.media-wrapper--4\:3{padding-bottom:75%}:root,[data-theme="default"]{--color-primary-darker:hsl(220, 90%, 36%);--color-primary-darker-h:220;--color-primary-darker-s:90%;--color-primary-darker-l:36%;--color-primary-dark:hsl(220, 90%, 46%);--color-primary-dark-h:220;--color-primary-dark-s:90%;--color-primary-dark-l:46%;--color-primary:hsl(220, 90%, 56%);--color-primary-h:220;--color-primary-s:90%;--color-primary-l:56%;--color-primary-light:hsl(220, 90%, 66%);--color-primary-light-h:220;--color-primary-light-s:90%;--color-primary-light-l:66%;--color-primary-lighter:hsl(220, 90%, 76%);--color-primary-lighter-h:220;--color-primary-lighter-s:90%;--color-primary-lighter-l:76%;--color-accent-darker:hsl(355, 90%, 41%);--color-accent-darker-h:355;--color-accent-darker-s:90%;--color-accent-darker-l:41%;--color-accent-dark:hsl(355, 90%, 51%);--color-accent-dark-h:355;--color-accent-dark-s:90%;--color-accent-dark-l:51%;--color-accent:hsl(355, 90%, 61%);--color-accent-h:355;--color-accent-s:90%;--color-accent-l:61%;--color-accent-light:hsl(355, 90%, 71%);--color-accent-light-h:355;--color-accent-light-s:90%;--color-accent-light-l:71%;--color-accent-lighter:hsl(355, 90%, 81%);--color-accent-lighter-h:355;--color-accent-lighter-s:90%;--color-accent-lighter-l:81%;--color-black:hsl(240, 8%, 12%);--color-black-h:240;--color-black-s:8%;--color-black-l:12%;--color-white:hsl(0, 0%, 100%);--color-white-h:0;--color-white-s:0%;--color-white-l:100%;--color-success-darker:hsl(94, 48%, 36%);--color-success-darker-h:94;--color-success-darker-s:48%;--color-success-darker-l:36%;--color-success-dark:hsl(94, 48%, 46%);--color-success-dark-h:94;--color-success-dark-s:48%;--color-success-dark-l:46%;--color-success:hsl(94, 48%, 56%);--color-success-h:94;--color-success-s:48%;--color-success-l:56%;--color-success-light:hsl(94, 48%, 66%);--color-success-light-h:94;--color-success-light-s:48%;--color-success-light-l:66%;--color-success-lighter:hsl(94, 48%, 76%);--color-success-lighter-h:94;--color-success-lighter-s:48%;--color-success-lighter-l:76%;--color-error-darker:hsl(355, 90%, 41%);--color-error-darker-h:355;--color-error-darker-s:90%;--color-error-darker-l:41%;--color-error-dark:hsl(355, 90%, 51%);--color-error-dark-h:355;--color-error-dark-s:90%;--color-error-dark-l:51%;--color-error:hsl(355, 90%, 61%);--color-error-h:355;--color-error-s:90%;--color-error-l:61%;--color-error-light:hsl(355, 90%, 71%);--color-error-light-h:355;--color-error-light-s:90%;--color-error-light-l:71%;--color-error-lighter:hsl(355, 90%, 81%);--color-error-lighter-h:355;--color-error-lighter-s:90%;--color-error-lighter-l:81%;--color-warning-darker:hsl(46, 100%, 41%);--color-warning-darker-h:46;--color-warning-darker-s:100%;--color-warning-darker-l:41%;--color-warning-dark:hsl(46, 100%, 51%);--color-warning-dark-h:46;--color-warning-dark-s:100%;--color-warning-dark-l:51%;--color-warning:hsl(46, 100%, 61%);--color-warning-h:46;--color-warning-s:100%;--color-warning-l:61%;--color-warning-light:hsl(46, 100%, 71%);--color-warning-light-h:46;--color-warning-light-s:100%;--color-warning-light-l:71%;--color-warning-lighter:hsl(46, 100%, 81%);--color-warning-lighter-h:46;--color-warning-lighter-s:100%;--color-warning-lighter-l:81%;--color-bg:hsl(0, 0%, 100%);--color-bg-h:0;--color-bg-s:0%;--color-bg-l:100%;--color-contrast-lower:hsl(0, 0%, 95%);--color-contrast-lower-h:0;--color-contrast-lower-s:0%;--color-contrast-lower-l:95%;--color-contrast-low:hsl(240, 1%, 83%);--color-contrast-low-h:240;--color-contrast-low-s:1%;--color-contrast-low-l:83%;--color-contrast-medium:hsl(240, 1%, 48%);--color-contrast-medium-h:240;--color-contrast-medium-s:1%;--color-contrast-medium-l:48%;--color-contrast-high:hsl(240, 4%, 20%);--color-contrast-high-h:240;--color-contrast-high-s:4%;--color-contrast-high-l:20%;--color-contrast-higher:hsl(240, 8%, 12%);--color-contrast-higher-h:240;--color-contrast-higher-s:8%;--color-contrast-higher-l:12%}@supports (--css: variables){@media (min-width: 64rem){:root{--space-unit:  1.25em}}}:root{--radius: 0.25em}:root{--font-primary: sans-serif;--text-base-size: 1em;--text-scale-ratio: 1.2;--text-xs: calc(1em/var(--text-scale-ratio)/var(--text-scale-ratio));--text-sm: calc(var(--text-xs)*var(--text-scale-ratio));--text-md: calc(var(--text-sm)*var(--text-scale-ratio)*var(--text-scale-ratio));--text-lg: calc(var(--text-md)*var(--text-scale-ratio));--text-xl: calc(var(--text-lg)*var(--text-scale-ratio));--text-xxl: calc(var(--text-xl)*var(--text-scale-ratio));--text-xxxl: calc(var(--text-xxl)*var(--text-scale-ratio));--body-line-height: 1.4;--heading-line-height: 1.2;--font-primary-capital-letter: 1}@supports (--css: variables){@media (min-width: 64rem){:root{--text-base-size: 1.25em;--text-scale-ratio: 1.25}}}mark{background-color:hsla(355, 90%, 61%, 0.2);background-color:hsla(var(--color-accent-h), var(--color-accent-s), var(--color-accent-l), 0.2);color:inherit}.text-component{--line-height-multiplier: 1;--text-vspace-multiplier: 1}.text-component blockquote{padding-left:1em;border-left:4px solid hsl(240, 1%, 83%);border-left:4px solid var(--color-contrast-low)}.text-component hr{background:hsl(240, 1%, 83%);background:var(--color-contrast-low);height:1px}.text-component figcaption{font-size:0.83333em;font-size:var(--text-sm);color:hsl(240, 1%, 48%);color:var(--color-contrast-medium)}.article.text-component{--line-height-multiplier: 1.13;--text-vspace-multiplier: 1.2}:root{--btn-font-size: 1em;--btn-font-size-sm: calc(var(--btn-font-size) - 0.2em);--btn-font-size-md: calc(var(--btn-font-size) + 0.2em);--btn-font-size-lg: calc(var(--btn-font-size) + 0.4em);--btn-radius: 0.25em;--btn-padding-x: var(--space-sm);--btn-padding-y: var(--space-xs)}.btn{--color-shadow: hsla(240, 8%, 12%, 0.15);--color-shadow: hsla(var(--color-black-h), var(--color-black-s), var(--color-black-l), 0.15);box-shadow:0 4px 16px hsla(240, 8%, 12%, 0.15);box-shadow:0 4px 16px hsla(var(--color-black-h), var(--color-black-s), var(--color-black-l), 0.15);cursor:pointer}.btn--primary{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.btn--accent{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.btn--disabled{opacity:0.6}:root{--form-control-padding-x: var(--space-sm);--form-control-padding-y: var(--space-xs);--form-control-radius: 0.25em}.form-control{border:2px solid hsl(240, 1%, 83%);border:2px solid var(--color-contrast-low)}.form-control:focus{outline:none;border-color:hsl(220, 90%, 56%);border-color:var(--color-primary);--color-shadow: hsla(220, 90%, 56%, 0.2);--color-shadow: hsla(var(--color-primary-h), var(--color-primary-s), var(--color-primary-l), 0.2);box-shadow:undefined;box-shadow:0 0 0 3px var(--color-shadow)}.form-control:focus:focus{box-shadow:0 0 0 3px hsla(220, 90%, 56%, 0.2);box-shadow:0 0 0 3px var(--color-shadow)}.form-control[aria-invalid="true"]{border-color:hsl(355, 90%, 61%);border-color:var(--color-error)}.form-control[aria-invalid="true"]:focus{--color-shadow: hsla(355, 90%, 61%, 0.2);--color-shadow: hsla(var(--color-error-h), var(--color-error-s), var(--color-error-l), 0.2);box-shadow:undefined;box-shadow:0 0 0 3px var(--color-shadow)}.form-control[aria-invalid="true"]:focus:focus{box-shadow:0 0 0 3px hsla(355, 90%, 61%, 0.2);box-shadow:0 0 0 3px var(--color-shadow)}.form-label{font-size:0.83333em;font-size:var(--text-sm)}:root{--cd-color-1:hsl(213, 7%, 33%);--cd-color-1-h:213;--cd-color-1-s:7%;--cd-color-1-l:33%;--cd-color-2:hsl(73, 46%, 55%);--cd-color-2-h:73;--cd-color-2-s:46%;--cd-color-2-l:55%;--cd-color-3:hsl(210, 14%, 49%);--cd-color-3-h:210;--cd-color-3-s:14%;--cd-color-3-l:49%;--cd-color-4:hsl(0, 0%, 100%);--cd-color-4-h:0;--cd-color-4-s:0%;--cd-color-4-l:100%;--font-primary: 'Open Sans', sans-serif}.cd-faq{box-shadow:0 1px 2px rgba(0, 0, 0, .085), 0 1px 8px rgba(0, 0, 0, .1);box-shadow:var(--shadow-sm)}.cd-faq::before{content:'mobile';display:none}.cd-faq a{text-decoration:none}@media (min-width: 64rem){.cd-faq{position:relative;box-shadow:none;display:-ms-flexbox;display:flex}.cd-faq::before{content:'desktop'}}@media (min-width: 64rem){.cd-faq__categories{position:-webkit-sticky;position:sticky;-ms-flex-item-align:start;align-self:flex-start;-ms-flex-negative:0;flex-shrink:0;top:20px;width:20%;box-shadow:0 1px 2px rgba(0, 0, 0, .085), 0 1px 8px rgba(0, 0, 0, .1);box-shadow:var(--shadow-sm);margin-top:1.25em;margin-top:var(--space-md)}}@media (min-width: 80rem){.cd-faq__categories{width:200px}}.cd-faq__category{position:relative;display:block;height:50px;line-height:50px;padding:0 2em 0 1.05em;padding:0 var(--space-lg) 0 calc(var(--space-sm)*1.4);color:hsl(0, 0%, 100%);color:var(--cd-color-4);background-color:hsl(213, 7%, 33%);background-color:var(--cd-color-1);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;--border-color: hsl(213, 7%, 36.3%);--border-color: hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*1.1));border-bottom:1px solid hsl(213, 7%, 36.3%);border-bottom:1px solid var(--border-color)}.cd-faq__category::before,.cd-faq__category::after{content:'';position:absolute;top:50%;right:16px;display:inline-block;height:1px;width:10px;background-color:hsl(213, 7%, 52.8%);background-color:hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*1.6))}.cd-faq__category::after{-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}li:last-child .cd-faq__category{border-bottom:none}@media (min-width: 64rem){.cd-faq__category{font-size:0.69444em;font-size:var(--text-xs);font-weight:600;padding:0 1.25em;padding:0 var(--space-md);transition:background .2s}.cd-faq__category::before,.cd-faq__category::after{display:none}.cd-faq__category:hover{background:hsl(213, 7%, 36.3%);background:hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*1.1))}}@media (min-width: 80rem){.cd-faq__category::before{display:block;top:0;right:auto;left:0;height:100%;width:3px;background-color:hsl(73, 46%, 55%);background-color:var(--cd-color-2);opacity:0;transition:opacity .2s}}@media (min-width: 80rem){.cd-faq__category-selected{background:hsl(213, 7%, 26.4%);background:hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*0.8))}.cd-faq__category-selected:hover{background:hsl(213, 7%, 26.4%);background:hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*0.8))}.cd-faq__category-selected::before{opacity:1}}.cd-faq__items{position:fixed;z-index:1;height:100%;width:90%;top:0;right:0;background:hsl(0, 0%, 100%);background:var(--cd-color-4);padding:0 1.25em 1.25em;padding:0 var(--component-padding) var(--space-md);overflow:auto;-webkit-overflow-scrolling:touch;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateZ(0) translateX(100%);transform:translateZ(0) translateX(100%);transition:-webkit-transform .3s;transition:transform .3s;transition:transform .3s, -webkit-transform .3s}@media (min-width: 64rem){.cd-faq__items{position:static;height:auto;width:auto;-ms-flex-positive:1;flex-grow:1;overflow:visible;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);padding:0 0 0 0.75em;padding:0 0 0 var(--space-sm);background:transparent}}.cd-faq__items--slide-in{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}html:not(.js) .cd-faq__items{position:static;height:auto;width:100%;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}.cd-faq__group{display:none}@media (min-width: 64rem){.cd-faq__group{display:block;padding-top:1px}}html:not(.js) .cd-faq__group,.cd-faq__group--selected{display:block}.cd-faq__title{margin:1.25em 0;margin:var(--space-md) 0}.cd-faq__title h2{text-transform:uppercase;font-size:0.83333em;font-size:var(--text-sm);font-weight:700;color:hsl(240, 1%, 74.7%);color:hsl(var(--color-contrast-low-h), var(--color-contrast-low-s), calc(var(--color-contrast-low-l)*0.9))}@media (min-width: 64rem){.cd-faq__title{margin-bottom:0.75em;margin-bottom:var(--space-sm)}.cd-faq__title h2{font-size:0.69444em;font-size:var(--text-xs)}}@media (min-width: 64rem){.cd-faq__item{background:hsl(0, 0%, 100%);background:var(--cd-color-4);margin-bottom:0.25em;margin-bottom:var(--space-xxxs);box-shadow:0 1px 2px rgba(0,0,0,0.08);transition:box-shadow .2s}.cd-faq__item:hover{--box-shadow: hsla(210, 14%, 49%, 0.3);--box-shadow: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.3);box-shadow:undefined;box-shadow:0 1px 10px var(--box-shadow)}@media (min-width: 64rem){.cd-faq__item:hover{box-shadow:0 1px 10px hsla(210, 14%, 49%, 0.3);box-shadow:0 1px 10px var(--box-shadow)}}.cd-faq__item:last-of-type{margin-bottom:0}}.cd-faq__trigger{display:block;position:relative;margin:1.25em 0 0.5em;margin:var(--space-md) 0 var(--space-xs);color:hsl(73, 46%, 55%);color:var(--cd-color-2)}@media (min-width: 64rem){.cd-faq__trigger{font-weight:300;margin:0;padding:0.75em 2em 0.75em 0.75em;padding:var(--space-sm) var(--space-lg) var(--space-sm) var(--space-sm)}.cd-faq__trigger span{font-size:1.2em;font-size:var(--text-md)}.cd-faq__trigger::before,.cd-faq__trigger::after{content:'';position:absolute;right:24px;top:50%;height:2px;width:13px;background:hsl(73, 46%, 71.5%);background:hsl(var(--cd-color-2-h), var(--cd-color-2-s), calc(var(--cd-color-2-l)*1.3));-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:-webkit-transform .2s;transition:transform .2s;transition:transform .2s, -webkit-transform .2s}.cd-faq__trigger::before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);right:32px}.cd-faq__trigger::after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.cd-faq__item-visible .cd-faq__trigger::before{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.cd-faq__item-visible .cd-faq__trigger::after{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}}.cd-faq__content .text-component{font-size:0.95em}.cd-faq__content p{color:hsl(210, 14%, 49%);color:var(--cd-color-3)}@media (min-width: 64rem){.cd-faq__content{display:none;padding:0 0.75em;padding:0 var(--space-sm);overflow:hidden}.cd-faq__content .text-component{font-size:0.75em;padding-bottom:1.25em;padding-bottom:var(--space-md)}}.cd-faq__content--visible{display:block}@media (min-width: 64rem){html:not(.js) .cd-faq__content{display:block}}.cd-faq__close-panel{position:fixed;z-index:2;display:block;top:5px;right:-40px;height:40px;width:40px;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:right .3s}.cd-faq__close-panel::before,.cd-faq__close-panel::after{content:'';position:absolute;top:16px;left:12px;display:inline-block;height:3px;width:18px;background:hsl(210, 14%, 49%);background:var(--cd-color-3)}.cd-faq__close-panel::before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.cd-faq__close-panel::after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}@media (min-width: 64rem){.cd-faq__close-panel{display:none}}.cd-faq__close-panel--move-left{right:1.25em;right:var(--component-padding);transition-delay:0.3s}.cd-faq__overlay{position:fixed;top:0;left:0;width:100%;height:100%;background-color:hsla(213, 7%, 33%, 0.8);background-color:hsla(var(--cd-color-1-h), var(--cd-color-1-s), var(--cd-color-1-l), 0.8);visibility:hidden;opacity:0;transition:opacity .3s, visibility .3s}@media (min-width: 64rem){.cd-faq__overlay{display:none}}.cd-faq__overlay--is-visible{visibility:visible;opacity:1}body{background-color:hsl(0, 0%, 95%);background-color:var(--color-contrast-lower)}.cd-header{--header-height: 180px;height:180px;height:var(--header-height);background-color:hsl(73, 46%, 55%);background-color:var(--cd-color-2)}@media (min-width: 80rem){.cd-header{height:240px;height:var(--header-height)}}.cd-header h1{font-size:1.728em;font-size:var(--text-xl);font-weight:300;color:hsl(0, 0%, 100%);color:var(--cd-color-4);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}@media (min-width: 80rem){.cd-header{--header-height: 240px}}.cd-article-link{color:hsl(73, 46%, 27.5%);color:hsl(var(--cd-color-2-h), var(--cd-color-2-s), calc(var(--cd-color-2-l)*0.5));font-size:0.83333em;font-size:var(--text-sm)}
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700');

    // --------------------------------

    // FAQ Template - by CodyHouse.co

    // --------------------------------

       :root {
       // colors
       @include defineColorHSL(--cd-color-1, 213, 7%, 33%);   // Blue Dark
       @include defineColorHSL(--cd-color-2, 73, 46%, 55%);   // Green
       @include defineColorHSL(--cd-color-3, 210, 14%, 49%);  // Blue Light
       @include defineColorHSL(--cd-color-4, 0, 0%, 100%);    // White

       // font
       --font-primary: 'Open Sans', sans-serif;
       }

    .cd-faq {
        box-shadow: var(--shadow-sm);

    &::before { // never visible - this is used in JavaScript to check the current MQ
     content: 'mobile';
         display: none;
     }

    a {
        text-decoration: none;
    }

    @include breakpoint(md) {
        position: relative;
        box-shadow: none;
        display: flex;

    &::before {
         content: 'desktop';
     }
    }
    }

    .cd-faq__categories {
    @include breakpoint(md) {
        position: sticky; // fix element on scrolling
    align-self: flex-start;
        flex-shrink: 0;
        top: 20px;
        width: 20%;
        box-shadow: var(--shadow-sm);
        margin-top: var(--space-md);
    }

    @include breakpoint(lg) {
        width: 200px;
    }
    }

    .cd-faq__category {
        position: relative;
        display: block;
        height: 50px;
        line-height: 50px;
        padding: 0 var(--space-lg) 0 calc(var(--space-sm)*1.4);
        color: var(--cd-color-4);
        background-color: var(--cd-color-1);
    @include fontSmooth;
        --border-color: hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*1.1));
        border-bottom: 1px solid var(--border-color);

    &::before, &::after { // plus icon on the right
                content: '';
                    position: absolute;
                    top: 50%;
                    right: 16px;
                    display: inline-block;
                    height: 1px;
                    width: 10px;
                    background-color: lightness(var(--cd-color-1), 1.6);
                }

    &::after {
         transform: rotate(90deg);
     }

    li:last-child & {
        border-bottom: none;
    }

    @include breakpoint(md) {
        font-size: var(--text-xs);
        font-weight: 600;
        padding: 0 var(--space-md);
        transition: background .2s;

    &::before, &::after {
                    display: none;
                }

    &:hover {
         background: lightness(var(--cd-color-1), 1.1);
     }
    }

    @include breakpoint(lg) {
    &::before { // decorative rectangle on the left visible for the selected item
    display: block;
        top: 0;
        right: auto;
        left: 0;
        height: 100%;
        width: 3px;
        background-color: var(--cd-color-2);
        opacity: 0;
        transition: opacity .2s;
    }
    }
    }

    @include breakpoint(lg) {
        .cd-faq__category-selected {
            background: lightness(var(--cd-color-1), 0.8);

    &:hover {
         background: lightness(var(--cd-color-1), 0.8);
     }

    &::before {
         opacity: 1;
     }
    }
    }

    .cd-faq__items { // on mibile, faq contents slides in from the right
    position: fixed;
        z-index: 1;
        height: 100%;
        width: 90%;
        top: 0;
        right: 0;
        background: var(--cd-color-4);
        padding: 0 var(--component-padding) var(--space-md);
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        backface-visibility: hidden;
        transform: translateZ(0) translateX(100%);
        transition: transform .3s;

    @include breakpoint(md) {
        position: static;
        height: auto;
        width: auto;
        flex-grow: 1;
        overflow: visible;
        transform: translateX(0);
        padding: 0 0 0 var(--space-sm);
        background: transparent;
    }
    }

    .cd-faq__items--slide-in {
        transform: translateX(0);
    }

    html:not(.js) .cd-faq__items {
        position: static;
        height: auto;
        width: 100%;
        transform: translateX(0);
    }

    .cd-faq__group {
        display: none; // hide group not selected

    @include breakpoint(md) { // all groups visible
    display: block;
        padding-top: 1px; // fix issue with collapsing margin
    }
    }

    html:not(.js) .cd-faq__group,
    .cd-faq__group--selected {
        display: block;
    }

    .cd-faq__title {
        margin: var(--space-md) 0;

    h2 {
        text-transform: uppercase;
        font-size: var(--text-sm);
        font-weight: 700;
        color: lightness(var(--color-contrast-low), 0.9);
    }

    @include breakpoint(md) {
        margin-bottom: var(--space-sm);

        h2 {
            font-size: var(--text-xs);
        }
    }
    }

    .cd-faq__item {
    @include breakpoint(md) {
        background: var(--cd-color-4);
        margin-bottom: var(--space-xxxs);
        box-shadow: 0 1px 2px rgba(#000, .08);
        transition: box-shadow .2s;

    &:hover {
         --box-shadow: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.3);
         box-shadow: 0 1px 10px var(--box-shadow);
     }

    &:last-of-type {
         margin-bottom: 0;
     }
    }
    }

    .cd-faq__trigger {
        display: block;
        position: relative;
        margin: var(--space-md) 0 var(--space-xs);
        color: var(--cd-color-2);

    @include breakpoint(md) {
        font-weight: 300;
        margin: 0;
        padding: var(--space-sm) var(--space-lg) var(--space-sm) var(--space-sm);

        span {
            font-size: var(--text-md);
        }

    &::before, &::after { // arrow icon on the right
                content: '';
                    position: absolute;
                    right: 24px;
                    top: 50%;
                    height: 2px;
                    width: 13px;
                    background: lightness(var(--cd-color-2), 1.3);
                    backface-visibility: hidden;
                    transition: transform .2s;
                }

    &::before {
         transform: rotate(45deg);
         right: 32px;
     }

    &::after {
         transform: rotate(-45deg);
     }

        .cd-faq__item-visible &::before {
                                   transform: rotate(-45deg);
                               }

        .cd-faq__item-visible &::after {
                                   transform: rotate(45deg);
                               }
    }
    }

    .cd-faq__content {
    .text-component {
        font-size: 0.95em;
    }

    p {
        color: var(--cd-color-3);
    }

    @include breakpoint(md) {
        display: none;
        padding: 0 var(--space-sm);
        overflow: hidden;

        .text-component {
            font-size: 0.75em;
            padding-bottom: var(--space-md);
        }
    }
    }

    .cd-faq__content--visible {
        display: block;
    }

    html:not(.js) .cd-faq__content {
    @include breakpoint(md) {
        display: block; // always display faq content
    }
    }

    .cd-faq__close-panel { // on small device -> x icon to close faqs panel
    position: fixed;
        z-index: 2;
        display: block;
        top: 5px;
        right: -40px;
        height: 40px;
        width: 40px;
    // Force Hardware Acceleration in WebKit
    transform: translateZ(0);
        backface-visibility: hidden;
        transition: right .3s;

    &::before, &::after { // close icon in CSS
                content: '';
                    position: absolute;
                    top: 16px;
                    left: 12px;
                    display: inline-block;
                    height: 3px;
                    width: 18px;
                    background: var(--cd-color-3);
                }

    &::before {
         transform: rotate(45deg);
     }

    &::after {
         transform: rotate(-45deg);
     }

    @include breakpoint(md) {
        display: none;
    }
    }

    .cd-faq__close-panel--move-left {
        right: var(--component-padding);
        transition-delay: 0.3s;
    }

    .cd-faq__overlay { // overlay visible on small devices when the right panel slides in
    position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: alpha(var(--cd-color-1), 0.8);
        visibility: hidden;
        opacity: 0;
        transition: opacity .3s, visibility .3s;

    @include breakpoint(md) {
        display: none;
    }
    }

    .cd-faq__overlay--is-visible {
        visibility: visible;
        opacity: 1;
    }

    // demo style
       body {
           background-color: var(--color-contrast-lower);
       }

    .cd-header {
        --header-height: 180px;
        height: var(--header-height);
        background-color: var(--cd-color-2);

    h1 {
        font-size: var(--text-xl);
        font-weight: 300;
        color: var(--cd-color-4);
    @include fontSmooth;
    }

    @include breakpoint(lg) {
        --header-height: 240px;
    }
    }

    .cd-article-link {
        color: lightness(var(--cd-color-2), 0.5);
        font-size: var(--text-sm);
    }

</style>

<header class="cd-header flex flex-column flex-center">
    <div class="text-component text-center">
        <h1>Инструкция по использованию плагина</h1>
    </div>
</header>

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
    <div class="cd-faq__items">
        <ul id="basics" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Вывод видео</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Как вывести одиночное видео?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Для вывода одиночного видео вы должны использовать соответствующий шорткод [videosurfpro-video id=1], где id - является уникальным идентификатором вашего видео. ID вашего видео отображается на странице Videos первым пунктом возле каждого ролика</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Как работают шорткоды?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Очень просто! Шорткод вы вставляете в любое текстовое место в админке и он заменяется на сайте на соответствующий контент (в нашем случае, видео)</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Что делать, если мое видео не выводится?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Скорее все статус вашего видео Draft - смените его на Published</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do reviews work?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->

        <ul id="mobile" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Mobile</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How does syncing work?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I upload files from my phone or tablet?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I link to a file or folder?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->

        <ul id="account" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Account</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I change my password?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum autem consectetur labore eius tenetur esse, in temporibus sequi cum voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae necessitatibus, unde, deserunt voluptas possimus veniam magni soluta deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam! Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I delete my account?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tempore soluta, minus magnam non blanditiis dolore, in nam voluptas nobis minima deserunt deleniti id animi amet, suscipit consequuntur corporis nihil laborum facere temporibus. Qui inventore, doloribus facilis, provident soluta voluptas excepturi perspiciatis fugiat odit vero! Optio assumenda animi at! Assumenda doloremque nemo est sequi eaque, ipsum id, labore rem nisi, amet similique vel autem dolore totam facilis deserunt. Mollitia non ut libero unde accusamus praesentium sint maiores, illo, nemo aliquid?</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I change my account settings?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>I forgot my password. How do I reset it?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum at aspernatur iure facere ab a corporis mollitia molestiae quod omnis minima, est labore quidem nobis accusantium ad totam sunt doloremque laudantium impedit similique iste quasi cum! Libero fugit at praesentium vero. Maiores non consequuntur rerum, nemo a qui repellat quibusdam architecto voluptatem? Sequi, possimus, cupiditate autem soluta ipsa rerum officiis cum libero delectus explicabo facilis, odit ullam aperiam reprehenderit! Vero ad non harum veritatis tempore beatae possimus, ex odio quo.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->

        <ul id="payments" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Payments</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Can I have an invoice for my subscription?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Why did my credit card or PayPal payment fail?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium dolorem vel, ad, nostrum natus eos, nemo placeat quos nisi architecto rem dolorum amet consectetur molestiae reprehenderit cum harum commodi beatae necessitatibus. Mollitia a nostrum enim earum minima doloribus illum autem, provident vero et, aspernatur quae sunt illo dolorem. Corporis blanditiis, unde, neque, adipisci debitis quas ullam accusantium repudiandae eum nostrum quis! Velit esse harum qui, modi ratione debitis alias laboriosam minus eaque, quod, itaque labore illo totam aut quia fuga nemo. Perferendis ipsa laborum atque assumenda tempore aspernatur a eos harum non id commodi excepturi quaerat ullam, explicabo, incidunt ipsam, accusantium quo magni ut! Ratione, magnam. Delectus nesciunt impedit praesentium sed, aliquam architecto dolores quae, distinctio consectetur obcaecati esse, consequuntur vel sit quis blanditiis possimus dolorum. Eaque architecto doloremque aliquid quae cumque, vitae perferendis enim, iure fugiat, soluta aut!</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Why does my bank statement show multiple charges for one upgrade?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->

        <ul id="privacy" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Privacy</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Can I specify my own private key?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>My files are missing! How do I get them back?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How can I access my account data?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus magni vero deserunt enim et quia in aliquam, rem tempore voluptas illo nisi veritatis quas quod placeat ipsa! Error qui harum accusamus incidunt at libero ipsum, suscipit dolorum esse explicabo in eius voluptates quidem voluptatem inventore amet eaque deserunt veniam dignissimos excepturi? Dolore, quo amet nostrum autem nemo. Sit nam assumenda, corporis ea sunt distinctio nostrum doloribus alias, beatae nesciunt dolore saepe consequuntur minima eveniet porro dolor officiis maiores ab obcaecati officia enim aliquam. Itaque fuga molestiae hic accusantium atque corporis quia id sequi enim vero? Hic aperiam sint facilis aliquam quia, accusamus tenetur earum totam enim est, error. Iusto, reiciendis necessitatibus molestias. Voluptatibus eos explicabo repellat nesciunt nam vero minima.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How can I control if other search engines can link to my profile?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->

        <ul id="delivery" class="cd-faq__group">
            <li class="cd-faq__title"><h2>Delivery</h2></li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>What should I do if my order hasn't been delivered yet?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How can I find your international delivery information?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>Who takes care of shipping?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do returns or refunds work?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I use shipping profiles?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How does your UK Next Day Delivery service work?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How does your Next Day Delivery service work?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>When will my order arrive?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>When will my order ship?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
                    </div>
                </div> <!-- cd-faq__content -->
            </li>
        </ul> <!-- cd-faq__group -->
    </div> <!-- cd-faq__items -->

    <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

    <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
<script>

    // Utility function
    function Util () {};

    /*
        class manipulation functions
    */
    Util.hasClass = function(el, className) {
        if (el.classList) return el.classList.contains(className);
        else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
    };

    Util.addClass = function(el, className) {
        var classList = className.split(' ');
        if (el.classList) el.classList.add(classList[0]);
        else if (!Util.hasClass(el, classList[0])) el.className += " " + classList[0];
        if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
    };

    Util.removeClass = function(el, className) {
        var classList = className.split(' ');
        if (el.classList) el.classList.remove(classList[0]);
        else if(Util.hasClass(el, classList[0])) {
            var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
            el.className=el.className.replace(reg, ' ');
        }
        if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
    };

    Util.toggleClass = function(el, className, bool) {
        if(bool) Util.addClass(el, className);
        else Util.removeClass(el, className);
    };

    Util.setAttributes = function(el, attrs) {
        for(var key in attrs) {
            el.setAttribute(key, attrs[key]);
        }
    };

    /*
      DOM manipulation
    */
    Util.getChildrenByClassName = function(el, className) {
        var children = el.children,
            childrenByClass = [];
        for (var i = 0; i < el.children.length; i++) {
            if (Util.hasClass(el.children[i], className)) childrenByClass.push(el.children[i]);
        }
        return childrenByClass;
    };

    /*
        Animate height of an element
    */
    Util.setHeight = function(start, to, element, duration, cb) {
        var change = to - start,
            currentTime = null;

        var animateHeight = function(timestamp){
            if (!currentTime) currentTime = timestamp;
            var progress = timestamp - currentTime;
            var val = parseInt((progress/duration)*change + start);
            // console.log(val);
            element.setAttribute("style", "height:"+val+"px;");
            if(progress < duration) {
                window.requestAnimationFrame(animateHeight);
            } else {
                cb();
            }
        };

        //set the height of the element before starting animation -> fix bug on Safari
        element.setAttribute("style", "height:"+start+"px;");
        window.requestAnimationFrame(animateHeight);
    };

    /*
        Smooth Scroll
    */

    Util.scrollTo = function(final, duration, cb) {
        var start = window.scrollY || document.documentElement.scrollTop,
            currentTime = null;

        var animateScroll = function(timestamp){
            if (!currentTime) currentTime = timestamp;
            var progress = timestamp - currentTime;
            if(progress > duration) progress = duration;
            var val = Math.easeInOutQuad(progress, start, final-start, duration);
            window.scrollTo(0, val);
            if(progress < duration) {
                window.requestAnimationFrame(animateScroll);
            } else {
                cb && cb();
            }
        };

        window.requestAnimationFrame(animateScroll);
    };

    /*
      Focus utility classes
    */

    //Move focus to an element
    Util.moveFocus = function (element) {
        if( !element ) element = document.getElementsByTagName("body")[0];
        element.focus();
        if (document.activeElement !== element) {
            element.setAttribute('tabindex','-1');
            element.focus();
        }
    };

    /*
      Misc
    */

    Util.getIndexInArray = function(array, el) {
        return Array.prototype.indexOf.call(array, el);
    };

    Util.cssSupports = function(property, value) {
        if('CSS' in window) {
            return CSS.supports(property, value);
        } else {
            var jsProperty = property.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase();});
            return jsProperty in document.body.style;
        }
    };

    /*
        Polyfills
    */
    //Closest() method
    if (!Element.prototype.matches) {
        Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
    }

    if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
            var el = this;
            if (!document.documentElement.contains(el)) return null;
            do {
                if (el.matches(s)) return el;
                el = el.parentElement || el.parentNode;
            } while (el !== null && el.nodeType === 1);
            return null;
        };
    }

    //Custom Event() constructor
    if ( typeof window.CustomEvent !== "function" ) {

        function CustomEvent ( event, params ) {
            params = params || { bubbles: false, cancelable: false, detail: undefined };
            var evt = document.createEvent( 'CustomEvent' );
            evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
            return evt;
        }

        CustomEvent.prototype = window.Event.prototype;

        window.CustomEvent = CustomEvent;
    }

    /*
        Animation curves
    */
    Math.easeInOutQuad = function (t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
    };
</script>
<!---->
<!--<script>-->
<!--    (function(){-->
<!--        // FAQ Template - by CodyHouse.co-->
<!--        var FaqTemplate = function(element) {-->
<!--            this.element = element;-->
<!--            this.sections = this.element.getElementsByClassName('cd-faq__group');-->
<!--            this.triggers = this.element.getElementsByClassName('cd-faq__trigger');-->
<!--            this.faqContainer = this.element.getElementsByClassName('cd-faq__items')[0];-->
<!--            this.faqsCategoriesContainer = this.element.getElementsByClassName('cd-faq__categories')[0];-->
<!--            this.faqsCategories = this.faqsCategoriesContainer.getElementsByClassName('cd-faq__category');-->
<!--            this.faqOverlay = this.element.getElementsByClassName('cd-faq__overlay')[0];-->
<!--            this.faqClose = this.element.getElementsByClassName('cd-faq__close-panel')[0];-->
<!--            this.scrolling = false;-->
<!--            initFaqEvents(this);-->
<!--        };-->
<!---->
<!--        function initFaqEvents(faqs) {-->
<!--            // click on a faq category-->
<!--            faqs.faqsCategoriesContainer.addEventListener('click', function(event){-->
<!--                var category = event.target.closest('.cd-faq__category');-->
<!--                if(!category) return;-->
<!--                var mq = getMq(faqs),-->
<!--                    selectedCategory = category.getAttribute('href').replace('#', '');-->
<!--                if(mq == 'mobile') { // on mobile, open faq panel-->
<!--                    event.preventDefault();-->
<!--                    faqs.faqContainer.scrollTop = 0;-->
<!--                    Util.addClass(faqs.faqContainer, 'cd-faq__items--slide-in');-->
<!--                    Util.addClass(faqs.faqClose, 'cd-faq__close-panel--move-left');-->
<!--                    Util.addClass(faqs.faqOverlay, 'cd-faq__overlay--is-visible');-->
<!--                    var selectedSection = faqs.faqContainer.getElementsByClassName('cd-faq__group--selected');-->
<!--                    if(selectedSection.length > 0) {-->
<!--                        Util.removeClass(selectedSection[0], 'cd-faq__group--selected');-->
<!--                    }-->
<!--                    Util.addClass(document.getElementById(selectedCategory), 'cd-faq__group--selected');-->
<!--                } else { // on desktop, scroll to section-->
<!--                    if(!window.requestAnimationFrame) return;-->
<!--                    event.preventDefault();-->
<!--                    var windowScrollTop = window.scrollY || document.documentElement.scrollTop;-->
<!--                    Util.scrollTo(document.getElementById(selectedCategory).getBoundingClientRect().top + windowScrollTop + 2, 200);-->
<!--                }-->
<!--            });-->
<!---->
<!--            // on mobile -> close faq panel-->
<!--            faqs.faqOverlay.addEventListener('click', function(event){-->
<!--                closeFaqPanel(faqs);-->
<!--            });-->
<!--            faqs.faqClose.addEventListener('click', function(event){-->
<!--                event.preventDefault();-->
<!--                closeFaqPanel(faqs);-->
<!--            });-->
<!---->
<!--            // on desktop -> toggle faq content visibility when clicking on the trigger element-->
<!--            faqs.faqContainer.addEventListener('click', function(event){-->
<!--                if(getMq(faqs) != 'desktop') return;-->
<!--                var trigger = event.target.closest('.cd-faq__trigger');-->
<!--                if(!trigger) return;-->
<!--                event.preventDefault();-->
<!--                var content = trigger.nextElementSibling,-->
<!--                    parent = trigger.closest('li'),-->
<!--                    bool = Util.hasClass(parent, 'cd-faq__item-visible');-->
<!---->
<!--                Util.toggleClass(parent, 'cd-faq__item-visible', !bool);-->
<!---->
<!--                //store initial and final height - animate faq content height-->
<!--                Util.addClass(content, 'cd-faq__content--visible');-->
<!--                var initHeight = bool ? content.offsetHeight: 0,-->
<!--                    finalHeight = bool ? 0 : content.offsetHeight;-->
<!---->
<!--                if(window.requestAnimationFrame) {-->
<!--                    Util.setHeight(initHeight, finalHeight, content, 200, function(){-->
<!--                        heighAnimationCb(content, bool);-->
<!--                    });-->
<!--                } else {-->
<!--                    heighAnimationCb(content, bool);-->
<!--                }-->
<!--            });-->
<!---->
<!--            if(window.requestAnimationFrame) {-->
<!--                // on scroll -> update selected category-->
<!--                window.addEventListener('scroll', function(){-->
<!--                    if(getMq(faqs) != 'desktop' || faqs.scrolling) return;-->
<!--                    faqs.scrolling = true;-->
<!--                    window.requestAnimationFrame(updateCategory.bind(faqs));-->
<!--                });-->
<!--            }-->
<!--        };-->
<!---->
<!--        function closeFaqPanel(faqs) {-->
<!--            Util.removeClass(faqs.faqContainer, 'cd-faq__items--slide-in');-->
<!--            Util.removeClass(faqs.faqClose, 'cd-faq__close-panel--move-left');-->
<!--            Util.removeClass(faqs.faqOverlay, 'cd-faq__overlay--is-visible');-->
<!--        };-->
<!---->
<!--        function getMq(faqs) {-->
<!--            //get MQ value ('desktop' or 'mobile')-->
<!--            return window.getComputedStyle(faqs.element, '::before').getPropertyValue('content').replace(/'|"/g, "");-->
<!--        };-->
<!---->
<!--        function updateCategory() { // update selected category -> show green rectangle to the left of the category-->
<!--            var selected = false;-->
<!--            for(var i = 0; i < this.sections.length; i++) {-->
<!--                var top = this.sections[i].getBoundingClientRect().top,-->
<!--                    bool = (top <= 0) && (-1*top < this.sections[i].offsetHeight);-->
<!--                Util.toggleClass(this.faqsCategories[i], 'cd-faq__category-selected', bool);-->
<!--                if(bool) selected = true;-->
<!--            }-->
<!--            if(!selected) Util.addClass(this.faqsCategories[0], 'cd-faq__category-selected');-->
<!--            this.scrolling = false;-->
<!--        };-->
<!---->
<!--        function heighAnimationCb(content, bool) {-->
<!--            content.removeAttribute("style");-->
<!--            if(bool) Util.removeClass(content, 'cd-faq__content--visible');-->
<!--        };-->
<!---->
<!--        var faqTemplate = document.getElementsByClassName('js-cd-faq'),-->
<!--            faqArray = [];-->
<!--        if(faqTemplate.length > 0) {-->
<!--            for(var i = 0; i < faqTemplate.length; i++) {-->
<!--                faqArray.push(new FaqTemplate(faqTemplate[i]));-->
<!--            }-->
<!--        };-->
<!--    })();-->
<!--</script>-->