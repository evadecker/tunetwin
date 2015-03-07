<?php if(!defined('KIRBY')) exit ?>

title: Tune
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  work:
    label: Encompassing Work (Album, Film, Orchestral Suite, etc.)
    type:  text
    icon:  music
  composer:
    label: Composer
    type:  text
    width: 3/4
    icon:  user
  year:
    label: Year
    type:  number
    width: 1/4
    icon:  calendar