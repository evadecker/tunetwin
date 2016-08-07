<?php if(!defined('KIRBY')) exit ?>

title: Twin
pages:
  max: 2
  build:
    - title: Tune 1
      uid: tune-1
      template: tune
      num: 1
    - title: Tune 2
      uid: tune-2
      template: tune
      num: 2
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  excerpt:
    label: Excerpt
    type:  textarea
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
    lowercase: true
  date:
    label: Date
    type:  date
    format: MM/DD/YYYY
  tune-1:
    label: Tune 1
    type:  text
    width: 1/2
  tune-2:
    label: Tune 2
    type:  text
    width: 1/2