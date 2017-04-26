@extends('admin.layouts.dashboard')

@section('page_heading','Icons')

@section('section')

    <div class="col-lg-12">
        @component('admin.widgets.panel')
            @slot ('panelTitle','Icons')
            @slot ('panelBody')
                <div class="row">
                    <div class="fa col-lg-3">
                        <p>@include('admin.widgets.icon', array('class'=>'glass')) fa-glass

                        <p>@include('admin.widgets.icon', array('class'=>'music')) fa-music

                        <p>@include('admin.widgets.icon', array('class'=>'search')) fa-search

                        <p>@include('admin.widgets.icon', array('class'=>'envelope-o')) fa-envelope-o

                        <p>@include('admin.widgets.icon', array('class'=>'heart')) fa-heart

                        <p>@include('admin.widgets.icon', array('class'=>'star')) fa-star

                        <p>@include('admin.widgets.icon', array('class'=>'star-o')) fa-star-o

                        <p>@include('admin.widgets.icon', array('class'=>'user')) fa-user

                        <p>@include('admin.widgets.icon', array('class'=>'film')) fa-film

                        <p>@include('admin.widgets.icon', array('class'=>'th-large')) fa-th-large

                        <p>@include('admin.widgets.icon', array('class'=>'th')) fa-th

                        <p>@include('admin.widgets.icon', array('class'=>'th-list')) fa-th-list

                        <p>@include('admin.widgets.icon', array('class'=>'check')) fa-check

                        <p>@include('admin.widgets.icon', array('class'=>'times')) fa-times

                        <p>@include('admin.widgets.icon', array('class'=>'search-plus')) fa-search-plus

                        <p>@include('admin.widgets.icon', array('class'=>'search-minus')) fa-search-minus

                        <p>@include('admin.widgets.icon', array('class'=>'power-off')) fa-power-off

                        <p>@include('admin.widgets.icon', array('class'=>'signal')) fa-signal

                        <p>@include('admin.widgets.icon', array('class'=>'gear')) fa-gear

                        <p>@include('admin.widgets.icon', array('class'=>'cog')) fa-cog

                        <p>@include('admin.widgets.icon', array('class'=>'trash-o')) fa-trash-o

                        <p>@include('admin.widgets.icon', array('class'=>'home')) fa-home

                        <p>@include('admin.widgets.icon', array('class'=>'file-o')) fa-file-o

                        <p>@include('admin.widgets.icon', array('class'=>'clock-o')) fa-clock-o

                        <p>@include('admin.widgets.icon', array('class'=>'road')) fa-road

                        <p>@include('admin.widgets.icon', array('class'=>'download')) fa-download

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-o-down'))
                            fa-arrow-circle-o-down

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-o-up'))
                            fa-arrow-circle-o-up

                        <p>@include('admin.widgets.icon', array('class'=>'inbox')) fa-inbox

                        <p>@include('admin.widgets.icon', array('class'=>'play-circle-o')) fa-play-circle-o

                        <p>@include('admin.widgets.icon', array('class'=>'rotate-right')) fa-rotate-right

                        <p>@include('admin.widgets.icon', array('class'=>'repeat')) fa-repeat

                        <p>@include('admin.widgets.icon', array('class'=>'refresh')) fa-refresh

                        <p>@include('admin.widgets.icon', array('class'=>'list-alt')) fa-list-alt

                        <p>@include('admin.widgets.icon', array('class'=>'lock')) fa-lock

                        <p>@include('admin.widgets.icon', array('class'=>'flag')) fa-flag

                        <p>@include('admin.widgets.icon', array('class'=>'headphones')) fa-headphones

                        <p>@include('admin.widgets.icon', array('class'=>'volume-off')) fa-volume-off

                        <p>@include('admin.widgets.icon', array('class'=>'volume-down')) fa-volume-down

                        <p>@include('admin.widgets.icon', array('class'=>'volume-up')) fa-volume-up

                        <p>@include('admin.widgets.icon', array('class'=>'qrcode')) fa-qrcode

                        <p>@include('admin.widgets.icon', array('class'=>'barcode')) fa-barcode

                        <p>@include('admin.widgets.icon', array('class'=>'tag')) fa-tag

                        <p>@include('admin.widgets.icon', array('class'=>'tags')) fa-tags

                        <p>@include('admin.widgets.icon', array('class'=>'book')) fa-book

                        <p>@include('admin.widgets.icon', array('class'=>'bookmark')) fa-bookmark

                        <p>@include('admin.widgets.icon', array('class'=>'print')) fa-print

                        <p>@include('admin.widgets.icon', array('class'=>'camera')) fa-camera

                        <p>@include('admin.widgets.icon', array('class'=>'font')) fa-font

                        <p>@include('admin.widgets.icon', array('class'=>'bold')) fa-bold

                        <p>@include('admin.widgets.icon', array('class'=>'italic')) fa-italic

                        <p>@include('admin.widgets.icon', array('class'=>'text-height')) fa-text-height

                        <p>@include('admin.widgets.icon', array('class'=>'text-width')) fa-text-width

                        <p>@include('admin.widgets.icon', array('class'=>'align-left')) fa-align-left

                        <p>@include('admin.widgets.icon', array('class'=>'align-center')) fa-align-center

                        <p>@include('admin.widgets.icon', array('class'=>'align-right')) fa-align-right

                        <p>@include('admin.widgets.icon', array('class'=>'align-justify')) fa-align-justify

                        <p>@include('admin.widgets.icon', array('class'=>'list')) fa-list

                        <p>@include('admin.widgets.icon', array('class'=>'dedent')) fa-dedent

                        <p>@include('admin.widgets.icon', array('class'=>'outdent')) fa-outdent

                        <p>@include('admin.widgets.icon', array('class'=>'indent')) fa-indent

                        <p>@include('admin.widgets.icon', array('class'=>'video-camera')) fa-video-camera

                        <p>@include('admin.widgets.icon', array('class'=>'photo')) fa-photo

                        <p>@include('admin.widgets.icon', array('class'=>'image')) fa-image

                        <p>@include('admin.widgets.icon', array('class'=>'picture-o')) fa-picture-o

                        <p>@include('admin.widgets.icon', array('class'=>'pencil')) fa-pencil

                        <p>@include('admin.widgets.icon', array('class'=>'map-marker')) fa-map-marker

                        <p>@include('admin.widgets.icon', array('class'=>'adjust')) fa-adjust

                        <p>@include('admin.widgets.icon', array('class'=>'tint')) fa-tint

                        <p>@include('admin.widgets.icon', array('class'=>'edit')) fa-edit

                        <p>@include('admin.widgets.icon', array('class'=>'pencil-square-o')) fa-pencil-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'share-square-o')) fa-share-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'check-square-o')) fa-check-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'arrows')) fa-arrows

                        <p>@include('admin.widgets.icon', array('class'=>'step-backward')) fa-step-backward

                        <p>@include('admin.widgets.icon', array('class'=>'fast-backward')) fa-fast-backward

                        <p>@include('admin.widgets.icon', array('class'=>'backward')) fa-backward

                        <p>@include('admin.widgets.icon', array('class'=>'play')) fa-play

                        <p>@include('admin.widgets.icon', array('class'=>'pause')) fa-pause

                        <p>@include('admin.widgets.icon', array('class'=>'stop')) fa-stop

                        <p>@include('admin.widgets.icon', array('class'=>'forward')) fa-forward

                        <p>@include('admin.widgets.icon', array('class'=>'fast-forward')) fa-fast-forward

                        <p>@include('admin.widgets.icon', array('class'=>'step-forward')) fa-step-forward

                        <p>@include('admin.widgets.icon', array('class'=>'eject')) fa-eject

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-left')) fa-chevron-left

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-right')) fa-chevron-right

                        <p>@include('admin.widgets.icon', array('class'=>'plus-circle')) fa-plus-circle

                        <p>@include('admin.widgets.icon', array('class'=>'minus-circle')) fa-minus-circle

                        <p>@include('admin.widgets.icon', array('class'=>'times-circle')) fa-times-circle

                        <p>@include('admin.widgets.icon', array('class'=>'check-circle')) fa-check-circle

                        <p>@include('admin.widgets.icon', array('class'=>'question-circle')) fa-question-circle

                        <p>@include('admin.widgets.icon', array('class'=>'info-circle')) fa-info-circle

                        <p>@include('admin.widgets.icon', array('class'=>'crosshairs')) fa-crosshairs

                        <p>@include('admin.widgets.icon', array('class'=>'times-circle-o')) fa-times-circle-o

                        <p>@include('admin.widgets.icon', array('class'=>'check-circle-o')) fa-check-circle-o

                        <p>@include('admin.widgets.icon', array('class'=>'ban')) fa-ban

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-left')) fa-arrow-left

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-right')) fa-arrow-right

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-up')) fa-arrow-up

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-down')) fa-arrow-down

                        <p>@include('admin.widgets.icon', array('class'=>'mail-forward')) fa-mail-forward

                        <p>@include('admin.widgets.icon', array('class'=>'share')) fa-share

                        <p>@include('admin.widgets.icon', array('class'=>'expand')) fa-expand

                        <p>@include('admin.widgets.icon', array('class'=>'compress')) fa-compress

                        <p>@include('admin.widgets.icon', array('class'=>'plus')) fa-plus

                        <p>@include('admin.widgets.icon', array('class'=>'minus')) fa-minus

                        <p>@include('admin.widgets.icon', array('class'=>'asterisk')) fa-asterisk

                        <p>@include('admin.widgets.icon', array('class'=>'exclamation-circle'))
                            fa-exclamation-circle

                        <p>@include('admin.widgets.icon', array('class'=>'gift')) fa-gift

                        <p>@include('admin.widgets.icon', array('class'=>'leaf')) fa-leaf

                        <p>@include('admin.widgets.icon', array('class'=>'fire')) fa-fire

                        <p>@include('admin.widgets.icon', array('class'=>'eye')) fa-eye

                        <p>@include('admin.widgets.icon', array('class'=>'eye-slash')) fa-eye-slash

                        <p>@include('admin.widgets.icon', array('class'=>'warning')) fa-warning

                        <p>@include('admin.widgets.icon', array('class'=>'exclamation-triangle'))
                            fa-exclamation-triangle

                        <p>@include('admin.widgets.icon', array('class'=>'plane')) fa-plane

                        <p>@include('admin.widgets.icon', array('class'=>'calendar')) fa-calendar

                        <p>@include('admin.widgets.icon', array('class'=>'random')) fa-random

                        <p>@include('admin.widgets.icon', array('class'=>'comment')) fa-comment

                        <p>@include('admin.widgets.icon', array('class'=>'magnet')) fa-magnet

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-up')) fa-chevron-up

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-down')) fa-chevron-down

                        <p>@include('admin.widgets.icon', array('class'=>'retweet')) fa-retweet

                        <p>@include('admin.widgets.icon', array('class'=>'shopping-cart')) fa-shopping-cart

                        <p>@include('admin.widgets.icon', array('class'=>'folder')) fa-folder

                        <p>@include('admin.widgets.icon', array('class'=>'folder-open')) fa-folder-open
                    </div>
                    <div class="fa col-lg-3">
                        <p>@include('admin.widgets.icon', array('class'=>'arrows-v')) fa-arrows-v

                        <p>@include('admin.widgets.icon', array('class'=>'arrows-h')) fa-arrows-h

                        <p>@include('admin.widgets.icon', array('class'=>'bar-chart-o')) fa-bar-chart-o

                        <p>@include('admin.widgets.icon', array('class'=>'twitter-square')) fa-twitter-square

                        <p>@include('admin.widgets.icon', array('class'=>'facebook-square')) fa-facebook-square

                        <p>@include('admin.widgets.icon', array('class'=>'camera-retro')) fa-camera-retro

                        <p>@include('admin.widgets.icon', array('class'=>'key')) fa-key

                        <p>@include('admin.widgets.icon', array('class'=>'gears')) fa-gears

                        <p>@include('admin.widgets.icon', array('class'=>'cogs')) fa-cogs

                        <p>@include('admin.widgets.icon', array('class'=>'comments')) fa-comments

                        <p>@include('admin.widgets.icon', array('class'=>'thumbs-o-up')) fa-thumbs-o-up

                        <p>@include('admin.widgets.icon', array('class'=>'thumbs-o-down')) fa-thumbs-o-down

                        <p>@include('admin.widgets.icon', array('class'=>'star-half')) fa-star-half

                        <p>@include('admin.widgets.icon', array('class'=>'heart-o')) fa-heart-o

                        <p>@include('admin.widgets.icon', array('class'=>'sign-out')) fa-sign-out

                        <p>@include('admin.widgets.icon', array('class'=>'linkedin-square')) fa-linkedin-square

                        <p>@include('admin.widgets.icon', array('class'=>'thumb-tack')) fa-thumb-tack

                        <p>@include('admin.widgets.icon', array('class'=>'external-link')) fa-external-link

                        <p>@include('admin.widgets.icon', array('class'=>'sign-in')) fa-sign-in

                        <p>@include('admin.widgets.icon', array('class'=>'trophy')) fa-trophy

                        <p>@include('admin.widgets.icon', array('class'=>'github-square')) fa-github-square

                        <p>@include('admin.widgets.icon', array('class'=>'upload')) fa-upload

                        <p>@include('admin.widgets.icon', array('class'=>'lemon-o')) fa-lemon-o

                        <p>@include('admin.widgets.icon', array('class'=>'phone')) fa-phone

                        <p>@include('admin.widgets.icon', array('class'=>'square-o')) fa-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'bookmark-o')) fa-bookmark-o

                        <p>@include('admin.widgets.icon', array('class'=>'phone-square')) fa-phone-square

                        <p>@include('admin.widgets.icon', array('class'=>'twitter')) fa-twitter

                        <p>@include('admin.widgets.icon', array('class'=>'facebook')) fa-facebook

                        <p>@include('admin.widgets.icon', array('class'=>'github')) fa-github

                        <p>@include('admin.widgets.icon', array('class'=>'unlock')) fa-unlock

                        <p>@include('admin.widgets.icon', array('class'=>'credit-card')) fa-credit-card

                        <p>@include('admin.widgets.icon', array('class'=>'rss')) fa-rss

                        <p>@include('admin.widgets.icon', array('class'=>'hdd-o')) fa-hdd-o

                        <p>@include('admin.widgets.icon', array('class'=>'bullhorn')) fa-bullhorn

                        <p>@include('admin.widgets.icon', array('class'=>'bell')) fa-bell

                        <p>@include('admin.widgets.icon', array('class'=>'certificate')) fa-certificate

                        <p>@include('admin.widgets.icon', array('class'=>'hand-o-right')) fa-hand-o-right

                        <p>@include('admin.widgets.icon', array('class'=>'hand-o-left')) fa-hand-o-left

                        <p>@include('admin.widgets.icon', array('class'=>'hand-o-up')) fa-hand-o-up

                        <p>@include('admin.widgets.icon', array('class'=>'hand-o-down')) fa-hand-o-down

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-left'))
                            fa-arrow-circle-left

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-right'))
                            fa-arrow-circle-right

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-up')) fa-arrow-circle-up

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-down'))
                            fa-arrow-circle-down

                        <p>@include('admin.widgets.icon', array('class'=>'globe')) fa-globe

                        <p>@include('admin.widgets.icon', array('class'=>'wrench')) fa-wrench

                        <p>@include('admin.widgets.icon', array('class'=>'tasks')) fa-tasks

                        <p>@include('admin.widgets.icon', array('class'=>'filter')) fa-filter

                        <p>@include('admin.widgets.icon', array('class'=>'brifiase')) fa-brifiase

                        <p>@include('admin.widgets.icon', array('class'=>'arrows-alt')) fa-arrows-alt

                        <p>@include('admin.widgets.icon', array('class'=>'group')) fa-group

                        <p>@include('admin.widgets.icon', array('class'=>'users')) fa-users

                        <p>@include('admin.widgets.icon', array('class'=>'chain')) fa-chain

                        <p>@include('admin.widgets.icon', array('class'=>'link')) fa-link

                        <p>@include('admin.widgets.icon', array('class'=>'cloud')) fa-cloud

                        <p>@include('admin.widgets.icon', array('class'=>'flask')) fa-flask

                        <p>@include('admin.widgets.icon', array('class'=>'cut')) fa-cut

                        <p>@include('admin.widgets.icon', array('class'=>'scissors')) fa-scissors

                        <p>@include('admin.widgets.icon', array('class'=>'copy')) fa-copy

                        <p>@include('admin.widgets.icon', array('class'=>'files-o')) fa-files-o

                        <p>@include('admin.widgets.icon', array('class'=>'paperclip')) fa-paperclip

                        <p>@include('admin.widgets.icon', array('class'=>'save')) fa-save

                        <p>@include('admin.widgets.icon', array('class'=>'floppy-o')) fa-floppy-o

                        <p>@include('admin.widgets.icon', array('class'=>'square')) fa-square

                        <p>@include('admin.widgets.icon', array('class'=>'navicon')) fa-navicon

                        <p>@include('admin.widgets.icon', array('class'=>'reorder')) fa-reorder

                        <p>@include('admin.widgets.icon', array('class'=>'bars')) fa-bars

                        <p>@include('admin.widgets.icon', array('class'=>'list-ul')) fa-list-ul

                        <p>@include('admin.widgets.icon', array('class'=>'list-ol')) fa-list-ol

                        <p>@include('admin.widgets.icon', array('class'=>'strikethrough')) fa-strikethrough

                        <p>@include('admin.widgets.icon', array('class'=>'underline')) fa-underline

                        <p>@include('admin.widgets.icon', array('class'=>'table')) fa-table

                        <p>@include('admin.widgets.icon', array('class'=>'magic')) fa-magic

                        <p>@include('admin.widgets.icon', array('class'=>'truck')) fa-truck

                        <p>@include('admin.widgets.icon', array('class'=>'pinterest')) fa-pinterest

                        <p>@include('admin.widgets.icon', array('class'=>'pinterest-square'))
                            fa-pinterest-square

                        <p>@include('admin.widgets.icon', array('class'=>'google-plus-square'))
                            fa-google-plus-square

                        <p>@include('admin.widgets.icon', array('class'=>'google-plus')) fa-google-plus

                        <p>@include('admin.widgets.icon', array('class'=>'money')) fa-money

                        <p>@include('admin.widgets.icon', array('class'=>'caret-down')) fa-caret-down

                        <p>@include('admin.widgets.icon', array('class'=>'caret-up')) fa-caret-up

                        <p>@include('admin.widgets.icon', array('class'=>'caret-left')) fa-caret-left

                        <p>@include('admin.widgets.icon', array('class'=>'caret-right')) fa-caret-right

                        <p>@include('admin.widgets.icon', array('class'=>'columns')) fa-columns

                        <p>@include('admin.widgets.icon', array('class'=>'unsorted')) fa-unsorted

                        <p>@include('admin.widgets.icon', array('class'=>'sort')) fa-sort

                        <p>@include('admin.widgets.icon', array('class'=>'sort-down')) fa-sort-down

                        <p>@include('admin.widgets.icon', array('class'=>'sort-desc')) fa-sort-desc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-up')) fa-sort-up

                        <p>@include('admin.widgets.icon', array('class'=>'sort-asc')) fa-sort-asc

                        <p>@include('admin.widgets.icon', array('class'=>'envelope')) fa-envelope

                        <p>@include('admin.widgets.icon', array('class'=>'linkedin')) fa-linkedin

                        <p>@include('admin.widgets.icon', array('class'=>'rotate-left')) fa-rotate-left

                        <p>@include('admin.widgets.icon', array('class'=>'undo')) fa-undo

                        <p>@include('admin.widgets.icon', array('class'=>'legal')) fa-legal

                        <p>@include('admin.widgets.icon', array('class'=>'gavel')) fa-gavel

                        <p>@include('admin.widgets.icon', array('class'=>'dashboard')) fa-dashboard

                        <p>@include('admin.widgets.icon', array('class'=>'tachometer')) fa-tachometer

                        <p>@include('admin.widgets.icon', array('class'=>'comment-o')) fa-comment-o

                        <p>@include('admin.widgets.icon', array('class'=>'comments-o')) fa-comments-o

                        <p>@include('admin.widgets.icon', array('class'=>'flash')) fa-flash

                        <p>@include('admin.widgets.icon', array('class'=>'bolt')) fa-bolt

                        <p>@include('admin.widgets.icon', array('class'=>'sitemap')) fa-sitemap

                        <p>@include('admin.widgets.icon', array('class'=>'mbreli')) fa-umbreli

                        <p>@include('admin.widgets.icon', array('class'=>'paste')) fa-paste

                        <p>@include('admin.widgets.icon', array('class'=>'clipboard')) fa-clipboard

                        <p>@include('admin.widgets.icon', array('class'=>'lightbulb-o')) fa-lightbulb-o

                        <p>@include('admin.widgets.icon', array('class'=>'exchange')) fa-exchange

                        <p>@include('admin.widgets.icon', array('class'=>'cloud-download')) fa-cloud-download

                        <p>@include('admin.widgets.icon', array('class'=>'cloud-upload')) fa-cloud-upload

                        <p>@include('admin.widgets.icon', array('class'=>'user-md')) fa-user-md

                        <p>@include('admin.widgets.icon', array('class'=>'stethoscope')) fa-stethoscope

                        <p>@include('admin.widgets.icon', array('class'=>'suitcase')) fa-suitcase

                        <p>@include('admin.widgets.icon', array('class'=>'bell-o')) fa-bell-o

                        <p>@include('admin.widgets.icon', array('class'=>'coffee')) fa-coffee

                        <p>@include('admin.widgets.icon', array('class'=>'cutlery')) fa-cutlery

                        <p>@include('admin.widgets.icon', array('class'=>'file-text-o')) fa-file-text-o

                        <p>@include('admin.widgets.icon', array('class'=>'building-o')) fa-building-o

                        <p>@include('admin.widgets.icon', array('class'=>'hospital-o')) fa-hospital-o

                        <p>@include('admin.widgets.icon', array('class'=>'ambulance')) fa-ambulance

                        <p>@include('admin.widgets.icon', array('class'=>'medkit')) fa-medkit

                        <p>@include('admin.widgets.icon', array('class'=>'fighter-jet')) fa-fighter-jet

                        <p>@include('admin.widgets.icon', array('class'=>'beer')) fa-beer

                        <p>@include('admin.widgets.icon', array('class'=>'h-square')) fa-h-square

                        <p>@include('admin.widgets.icon', array('class'=>'plus-square')) fa-plus-square
                    </div>
                    <div class="fa col-lg-3">
                        <p>@include('admin.widgets.icon', array('class'=>'angle-double-left'))
                            fa-angle-double-left

                        <p>@include('admin.widgets.icon', array('class'=>'angle-double-right'))
                            fa-angle-double-right

                        <p>@include('admin.widgets.icon', array('class'=>'angle-double-up')) fa-angle-double-up

                        <p>@include('admin.widgets.icon', array('class'=>'angle-double-down'))
                            fa-angle-double-down

                        <p>@include('admin.widgets.icon', array('class'=>'angle-left')) fa-angle-left

                        <p>@include('admin.widgets.icon', array('class'=>'angle-right')) fa-angle-right

                        <p>@include('admin.widgets.icon', array('class'=>'angle-up')) fa-angle-up

                        <p>@include('admin.widgets.icon', array('class'=>'angle-down')) fa-angle-down

                        <p>@include('admin.widgets.icon', array('class'=>'desktop')) fa-desktop

                        <p>@include('admin.widgets.icon', array('class'=>'laptop')) fa-laptop

                        <p>@include('admin.widgets.icon', array('class'=>'tablet')) fa-tablet

                        <p>@include('admin.widgets.icon', array('class'=>'mobile-phone')) fa-mobile-phone

                        <p>@include('admin.widgets.icon', array('class'=>'mobile')) fa-mobile

                        <p>@include('admin.widgets.icon', array('class'=>'circle-o')) fa-circle-o

                        <p>@include('admin.widgets.icon', array('class'=>'quote-left')) fa-quote-left

                        <p>@include('admin.widgets.icon', array('class'=>'quote-right')) fa-quote-right

                        <p>@include('admin.widgets.icon', array('class'=>'spinner')) fa-spinner

                        <p>@include('admin.widgets.icon', array('class'=>'circle')) fa-circle

                        <p>@include('admin.widgets.icon', array('class'=>'mail-reply')) fa-mail-reply

                        <p>@include('admin.widgets.icon', array('class'=>'reply')) fa-reply

                        <p>@include('admin.widgets.icon', array('class'=>'github-alt')) fa-github-alt

                        <p>@include('admin.widgets.icon', array('class'=>'folder-o')) fa-folder-o

                        <p>@include('admin.widgets.icon', array('class'=>'folder-open-o')) fa-folder-open-o

                        <p>@include('admin.widgets.icon', array('class'=>'smile-o')) fa-smile-o

                        <p>@include('admin.widgets.icon', array('class'=>'frown-o')) fa-frown-o

                        <p>@include('admin.widgets.icon', array('class'=>'meh-o')) fa-meh-o

                        <p>@include('admin.widgets.icon', array('class'=>'gamepad')) fa-gamepad

                        <p>@include('admin.widgets.icon', array('class'=>'keyboard-o')) fa-keyboard-o

                        <p>@include('admin.widgets.icon', array('class'=>'flag-o')) fa-flag-o

                        <p>@include('admin.widgets.icon', array('class'=>'flag-checkered')) fa-flag-checkered

                        <p>@include('admin.widgets.icon', array('class'=>'terminal')) fa-terminal

                        <p>@include('admin.widgets.icon', array('class'=>'code')) fa-code

                        <p>@include('admin.widgets.icon', array('class'=>'mail-reply-all')) fa-mail-reply-all

                        <p>@include('admin.widgets.icon', array('class'=>'reply-all')) fa-reply-all

                        <p>@include('admin.widgets.icon', array('class'=>'star-half-empty')) fa-star-half-empty

                        <p>@include('admin.widgets.icon', array('class'=>'star-half-full')) fa-star-half-full

                        <p>@include('admin.widgets.icon', array('class'=>'star-half-o')) fa-star-half-o

                        <p>@include('admin.widgets.icon', array('class'=>'location-arrow')) fa-location-arrow

                        <p>@include('admin.widgets.icon', array('class'=>'crop')) fa-crop

                        <p>@include('admin.widgets.icon', array('class'=>'code-fork')) fa-code-fork

                        <p>@include('admin.widgets.icon', array('class'=>'unlink')) fa-unlink

                        <p>@include('admin.widgets.icon', array('class'=>'chain-broei')) fa-chain-broei

                        <p>@include('admin.widgets.icon', array('class'=>'question')) fa-question

                        <p>@include('admin.widgets.icon', array('class'=>'info')) fa-info

                        <p>@include('admin.widgets.icon', array('class'=>'exclamation')) fa-exclamation

                        <p>@include('admin.widgets.icon', array('class'=>'superscript')) fa-superscript

                        <p>@include('admin.widgets.icon', array('class'=>'subscript')) fa-subscript

                        <p>@include('admin.widgets.icon', array('class'=>'eraser')) fa-eraser

                        <p>@include('admin.widgets.icon', array('class'=>'puzzle-piece')) fa-puzzle-piece

                        <p>@include('admin.widgets.icon', array('class'=>'microphone')) fa-microphone

                        <p>@include('admin.widgets.icon', array('class'=>'microphone-slash'))
                            fa-microphone-slash

                        <p>@include('admin.widgets.icon', array('class'=>'shield')) fa-shield

                        <p>@include('admin.widgets.icon', array('class'=>'calendar-o')) fa-calendar-o

                        <p>@include('admin.widgets.icon', array('class'=>'fire-extinguisher'))
                            fa-fire-extinguisher

                        <p>@include('admin.widgets.icon', array('class'=>'rocket')) fa-rocket

                        <p>@include('admin.widgets.icon', array('class'=>'maxcdn')) fa-maxcdn

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-circle-left'))
                            fa-chevron-circle-left

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-circle-right'))
                            fa-chevron-circle-right

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-circle-up'))
                            fa-chevron-circle-up

                        <p>@include('admin.widgets.icon', array('class'=>'chevron-circle-down'))
                            fa-chevron-circle-down

                        <p>@include('admin.widgets.icon', array('class'=>'html5')) fa-html5

                        <p>@include('admin.widgets.icon', array('class'=>'css3')) fa-css3

                        <p>@include('admin.widgets.icon', array('class'=>'anchor')) fa-anchor

                        <p>@include('admin.widgets.icon', array('class'=>'unlock-alt')) fa-unlock-alt

                        <p>@include('admin.widgets.icon', array('class'=>'bullseye')) fa-bullseye

                        <p>@include('admin.widgets.icon', array('class'=>'ellipsis-h')) fa-ellipsis-h

                        <p>@include('admin.widgets.icon', array('class'=>'ellipsis-v')) fa-ellipsis-v

                        <p>@include('admin.widgets.icon', array('class'=>'rss-square')) fa-rss-square

                        <p>@include('admin.widgets.icon', array('class'=>'play-circle')) fa-play-circle

                        <p>@include('admin.widgets.icon', array('class'=>'ticket')) fa-ticket

                        <p>@include('admin.widgets.icon', array('class'=>'minus-square')) fa-minus-square

                        <p>@include('admin.widgets.icon', array('class'=>'minus-square-o')) fa-minus-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'level-up')) fa-level-up

                        <p>@include('admin.widgets.icon', array('class'=>'level-down')) fa-level-down

                        <p>@include('admin.widgets.icon', array('class'=>'check-square')) fa-check-square

                        <p>@include('admin.widgets.icon', array('class'=>'pencil-square')) fa-pencil-square

                        <p>@include('admin.widgets.icon', array('class'=>'external-link-square'))
                            fa-external-link-square

                        <p>@include('admin.widgets.icon', array('class'=>'share-square')) fa-share-square

                        <p>@include('admin.widgets.icon', array('class'=>'compass')) fa-compass

                        <p>@include('admin.widgets.icon', array('class'=>'toggle-down')) fa-toggle-down

                        <p>@include('admin.widgets.icon', array('class'=>'caret-square-o-down'))
                            fa-caret-square-o-down

                        <p>@include('admin.widgets.icon', array('class'=>'toggle-up')) fa-toggle-up

                        <p>@include('admin.widgets.icon', array('class'=>'caret-square-o-up'))
                            fa-caret-square-o-up

                        <p>@include('admin.widgets.icon', array('class'=>'toggle-right')) fa-toggle-right

                        <p>@include('admin.widgets.icon', array('class'=>'caret-square-o-right'))
                            fa-caret-square-o-right

                        <p>@include('admin.widgets.icon', array('class'=>'euro')) fa-euro

                        <p>@include('admin.widgets.icon', array('class'=>'eur')) fa-eur

                        <p>@include('admin.widgets.icon', array('class'=>'gbp')) fa-gbp

                        <p>@include('admin.widgets.icon', array('class'=>'dollar')) fa-dollar

                        <p>@include('admin.widgets.icon', array('class'=>'usd')) fa-usd

                        <p>@include('admin.widgets.icon', array('class'=>'rupee')) fa-rupee

                        <p>@include('admin.widgets.icon', array('class'=>'inr')) fa-inr

                        <p>@include('admin.widgets.icon', array('class'=>'cny')) fa-cny

                        <p>@include('admin.widgets.icon', array('class'=>'rmb')) fa-rmb

                        <p>@include('admin.widgets.icon', array('class'=>'yen')) fa-yen

                        <p>@include('admin.widgets.icon', array('class'=>'jpy')) fa-jpy

                        <p>@include('admin.widgets.icon', array('class'=>'ruble')) fa-ruble

                        <p>@include('admin.widgets.icon', array('class'=>'rouble')) fa-rouble

                        <p>@include('admin.widgets.icon', array('class'=>'rub')) fa-rub

                        <p>@include('admin.widgets.icon', array('class'=>'won')) fa-won

                        <p>@include('admin.widgets.icon', array('class'=>'krw')) fa-krw

                        <p>@include('admin.widgets.icon', array('class'=>'bitcoin')) fa-bitcoin

                        <p>@include('admin.widgets.icon', array('class'=>'btc')) fa-btc

                        <p>@include('admin.widgets.icon', array('class'=>'file')) fa-file

                        <p>@include('admin.widgets.icon', array('class'=>'file-text')) fa-file-text

                        <p>@include('admin.widgets.icon', array('class'=>'sort-alpha-asc')) fa-sort-alpha-asc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-alpha-desc')) fa-sort-alpha-desc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-amount-asc')) fa-sort-amount-asc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-amount-desc'))
                            fa-sort-amount-desc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-numeric-asc'))
                            fa-sort-numeric-asc

                        <p>@include('admin.widgets.icon', array('class'=>'sort-numeric-desc'))
                            fa-sort-numeric-desc

                        <p>@include('admin.widgets.icon', array('class'=>'thumbs-up')) fa-thumbs-up

                        <p>@include('admin.widgets.icon', array('class'=>'thumbs-down')) fa-thumbs-down

                        <p>@include('admin.widgets.icon', array('class'=>'youtube-square')) fa-youtube-square

                        <p>@include('admin.widgets.icon', array('class'=>'youtube')) fa-youtube

                        <p>@include('admin.widgets.icon', array('class'=>'xing')) fa-xing

                        <p>@include('admin.widgets.icon', array('class'=>'xing-square')) fa-xing-square

                        <p>@include('admin.widgets.icon', array('class'=>'youtube-play')) fa-youtube-play

                        <p>@include('admin.widgets.icon', array('class'=>'dropbox')) fa-dropbox

                        <p>@include('admin.widgets.icon', array('class'=>'stack-overflow')) fa-stack-overflow

                        <p>@include('admin.widgets.icon', array('class'=>'instagram')) fa-instagram

                        <p>@include('admin.widgets.icon', array('class'=>'flickr')) fa-flickr

                        <p>@include('admin.widgets.icon', array('class'=>'adn')) fa-adn

                        <p>@include('admin.widgets.icon', array('class'=>'bitbucket')) fa-bitbucket

                        <p>@include('admin.widgets.icon', array('class'=>'bitbucket-square'))
                            fa-bitbucket-square

                        <p>@include('admin.widgets.icon', array('class'=>'tumblr')) fa-tumblr
                    </div>
                    <div class="fa col-lg-3">
                        <p>@include('admin.widgets.icon', array('class'=>'tumblr-square')) fa-tumblr-square

                        <p>@include('admin.widgets.icon', array('class'=>'long-arrow-down')) fa-long-arrow-down

                        <p>@include('admin.widgets.icon', array('class'=>'long-arrow-up')) fa-long-arrow-up

                        <p>@include('admin.widgets.icon', array('class'=>'long-arrow-left')) fa-long-arrow-left

                        <p>@include('admin.widgets.icon', array('class'=>'long-arrow-right'))
                            fa-long-arrow-right

                        <p>@include('admin.widgets.icon', array('class'=>'apple')) fa-apple

                        <p>@include('admin.widgets.icon', array('class'=>'windows')) fa-windows

                        <p>@include('admin.widgets.icon', array('class'=>'android')) fa-android

                        <p>@include('admin.widgets.icon', array('class'=>'linux')) fa-linux

                        <p>@include('admin.widgets.icon', array('class'=>'dribbble')) fa-dribbble

                        <p>@include('admin.widgets.icon', array('class'=>'skype')) fa-skype

                        <p>@include('admin.widgets.icon', array('class'=>'foursquare')) fa-foursquare

                        <p>@include('admin.widgets.icon', array('class'=>'trello')) fa-trello

                        <p>@include('admin.widgets.icon', array('class'=>'female')) fa-female

                        <p>@include('admin.widgets.icon', array('class'=>'male')) fa-male

                        <p>@include('admin.widgets.icon', array('class'=>'gittip')) fa-gittip

                        <p>@include('admin.widgets.icon', array('class'=>'sun-o')) fa-sun-o

                        <p>@include('admin.widgets.icon', array('class'=>'moon-o')) fa-moon-o

                        <p>@include('admin.widgets.icon', array('class'=>'archive')) fa-archive

                        <p>@include('admin.widgets.icon', array('class'=>'bug')) fa-bug

                        <p>@include('admin.widgets.icon', array('class'=>'vk')) fa-vk

                        <p>@include('admin.widgets.icon', array('class'=>'weibo')) fa-weibo

                        <p>@include('admin.widgets.icon', array('class'=>'renren')) fa-renren

                        <p>@include('admin.widgets.icon', array('class'=>'pagelines')) fa-pagelines

                        <p>@include('admin.widgets.icon', array('class'=>'stack-exchange')) fa-stack-exchange

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-o-right'))
                            fa-arrow-circle-o-right

                        <p>@include('admin.widgets.icon', array('class'=>'arrow-circle-o-left'))
                            fa-arrow-circle-o-left

                        <p>@include('admin.widgets.icon', array('class'=>'toggle-left')) fa-toggle-left

                        <p>@include('admin.widgets.icon', array('class'=>'caret-square-o-left'))
                            fa-caret-square-o-left

                        <p>@include('admin.widgets.icon', array('class'=>'dot-circle-o')) fa-dot-circle-o

                        <p>@include('admin.widgets.icon', array('class'=>'wheelchair')) fa-wheelchair

                        <p>@include('admin.widgets.icon', array('class'=>'vimeo-square')) fa-vimeo-square

                        <p>@include('admin.widgets.icon', array('class'=>'turkish-lira')) fa-turkish-lira

                        <p>@include('admin.widgets.icon', array('class'=>'try')) fa-try

                        <p>@include('admin.widgets.icon', array('class'=>'plus-square-o')) fa-plus-square-o

                        <p>@include('admin.widgets.icon', array('class'=>'space-shuttle')) fa-space-shuttle

                        <p>@include('admin.widgets.icon', array('class'=>'slack')) fa-slack

                        <p>@include('admin.widgets.icon', array('class'=>'envelope-square')) fa-envelope-square

                        <p>@include('admin.widgets.icon', array('class'=>'wordpress')) fa-wordpress

                        <p>@include('admin.widgets.icon', array('class'=>'openid')) fa-openid

                        <p>@include('admin.widgets.icon', array('class'=>'institution')) fa-institution

                        <p>@include('admin.widgets.icon', array('class'=>'bank')) fa-bank

                        <p>@include('admin.widgets.icon', array('class'=>'university')) fa-university

                        <p>@include('admin.widgets.icon', array('class'=>'mortar-board')) fa-mortar-board

                        <p>@include('admin.widgets.icon', array('class'=>'graduation-cap')) fa-graduation-cap

                        <p>@include('admin.widgets.icon', array('class'=>'yahoo')) fa-yahoo

                        <p>@include('admin.widgets.icon', array('class'=>'google')) fa-google

                        <p>@include('admin.widgets.icon', array('class'=>'reddit')) fa-reddit

                        <p>@include('admin.widgets.icon', array('class'=>'reddit-square')) fa-reddit-square

                        <p>@include('admin.widgets.icon', array('class'=>'stumbleupon-circle'))
                            fa-stumbleupon-circle

                        <p>@include('admin.widgets.icon', array('class'=>'stumbleupon')) fa-stumbleupon

                        <p>@include('admin.widgets.icon', array('class'=>'delicious')) fa-delicious

                        <p>@include('admin.widgets.icon', array('class'=>'digg')) fa-digg

                        <p>@include('admin.widgets.icon', array('class'=>'pied-piper-square'))
                            fa-pied-piper-square

                        <p>@include('admin.widgets.icon', array('class'=>'pied-piper')) fa-pied-piper

                        <p>@include('admin.widgets.icon', array('class'=>'pied-piper-alt')) fa-pied-piper-alt

                        <p>@include('admin.widgets.icon', array('class'=>'drupal')) fa-drupal

                        <p>@include('admin.widgets.icon', array('class'=>'joomla')) fa-joomla

                        <p>@include('admin.widgets.icon', array('class'=>'language')) fa-language

                        <p>@include('admin.widgets.icon', array('class'=>'fax')) fa-fax

                        <p>@include('admin.widgets.icon', array('class'=>'building')) fa-building

                        <p>@include('admin.widgets.icon', array('class'=>'child')) fa-child

                        <p>@include('admin.widgets.icon', array('class'=>'paw')) fa-paw

                        <p>@include('admin.widgets.icon', array('class'=>'spoon')) fa-spoon

                        <p>@include('admin.widgets.icon', array('class'=>'cube')) fa-cube

                        <p>@include('admin.widgets.icon', array('class'=>'cubes')) fa-cubes

                        <p>@include('admin.widgets.icon', array('class'=>'behance')) fa-behance

                        <p>@include('admin.widgets.icon', array('class'=>'behance-square')) fa-behance-square

                        <p>@include('admin.widgets.icon', array('class'=>'steam')) fa-steam

                        <p>@include('admin.widgets.icon', array('class'=>'steam-square')) fa-steam-square

                        <p>@include('admin.widgets.icon', array('class'=>'recycle')) fa-recycle

                        <p>@include('admin.widgets.icon', array('class'=>'automobile')) fa-automobile

                        <p>@include('admin.widgets.icon', array('class'=>'car')) fa-car

                        <p>@include('admin.widgets.icon', array('class'=>'cab')) fa-cab

                        <p>@include('admin.widgets.icon', array('class'=>'taxi')) fa-taxi

                        <p>@include('admin.widgets.icon', array('class'=>'tree')) fa-tree

                        <p>@include('admin.widgets.icon', array('class'=>'spotify')) fa-spotify

                        <p>@include('admin.widgets.icon', array('class'=>'deviantart')) fa-deviantart

                        <p>@include('admin.widgets.icon', array('class'=>'soundcloud')) fa-soundcloud

                        <p>@include('admin.widgets.icon', array('class'=>'database')) fa-database

                        <p>@include('admin.widgets.icon', array('class'=>'file-pdf-o')) fa-file-pdf-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-word-o')) fa-file-word-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-excel-o')) fa-file-excel-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-powerpoint-o'))
                            fa-file-powerpoint-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-photo-o')) fa-file-photo-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-picture-o')) fa-file-picture-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-image-o')) fa-file-image-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-zip-o')) fa-file-zip-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-archive-o')) fa-file-archive-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-sound-o')) fa-file-sound-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-audio-o')) fa-file-audio-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-movie-o')) fa-file-movie-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-video-o')) fa-file-video-o

                        <p>@include('admin.widgets.icon', array('class'=>'file-code-o')) fa-file-code-o

                        <p>@include('admin.widgets.icon', array('class'=>'vine')) fa-vine

                        <p>@include('admin.widgets.icon', array('class'=>'codepen')) fa-codepen

                        <p>@include('admin.widgets.icon', array('class'=>'jsfiddle')) fa-jsfiddle

                        <p>@include('admin.widgets.icon', array('class'=>'life-bouy')) fa-life-bouy

                        <p>@include('admin.widgets.icon', array('class'=>'life-saver')) fa-life-saver

                        <p>@include('admin.widgets.icon', array('class'=>'support')) fa-support

                        <p>@include('admin.widgets.icon', array('class'=>'life-ring')) fa-life-ring

                        <p>@include('admin.widgets.icon', array('class'=>'circle-o-notch')) fa-circle-o-notch

                        <p>@include('admin.widgets.icon', array('class'=>'ra')) fa-ra

                        <p>@include('admin.widgets.icon', array('class'=>'rebel')) fa-rebel

                        <p>@include('admin.widgets.icon', array('class'=>'ge')) fa-ge

                        <p>@include('admin.widgets.icon', array('class'=>'empire')) fa-empire

                        <p>@include('admin.widgets.icon', array('class'=>'git-square')) fa-git-square

                        <p>@include('admin.widgets.icon', array('class'=>'git')) fa-git

                        <p>@include('admin.widgets.icon', array('class'=>'hacker-news')) fa-hacker-news

                        <p>@include('admin.widgets.icon', array('class'=>'tencent-weibo')) fa-tencent-weibo

                        <p>@include('admin.widgets.icon', array('class'=>'qq')) fa-qq

                        <p>@include('admin.widgets.icon', array('class'=>'wechat')) fa-wechat

                        <p>@include('admin.widgets.icon', array('class'=>'weixin')) fa-weixin

                        <p>@include('admin.widgets.icon', array('class'=>'send')) fa-send

                        <p>@include('admin.widgets.icon', array('class'=>'paper-plane')) fa-paper-plane

                        <p>@include('admin.widgets.icon', array('class'=>'send-o')) fa-send-o

                        <p>@include('admin.widgets.icon', array('class'=>'paper-plane-o')) fa-paper-plane-o

                        <p>@include('admin.widgets.icon', array('class'=>'history')) fa-history

                        <p>@include('admin.widgets.icon', array('class'=>'circle-thin')) fa-circle-thin

                        <p>@include('admin.widgets.icon', array('class'=>'header')) fa-header

                        <p>@include('admin.widgets.icon', array('class'=>'paragraph')) fa-paragraph

                        <p>@include('admin.widgets.icon', array('class'=>'sliders')) fa-sliders

                        <p>@include('admin.widgets.icon', array('class'=>'share-alt')) fa-share-alt

                        <p>@include('admin.widgets.icon', array('class'=>'share-alt-square'))
                            fa-share-alt-square

                        <p>@include('admin.widgets.icon', array('class'=>'bomb')) fa-bomb

                    </div>
                </div>
            @endslot
        @endcomponent
    </div>
    <!-- /.col-lg-12 -->

@endsection