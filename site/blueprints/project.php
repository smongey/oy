<?php if(!defined('KIRBY')) exit ?>

title: Exhibitions
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Info
    type:  text
  dates:
    label: Dates
    type:  text
  align:
    label: Align
    type: radio
    options:
      left: left
      middle: middle
      right: right