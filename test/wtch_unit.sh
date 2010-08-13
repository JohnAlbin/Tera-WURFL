#!/bin/bash
TESTFILE=$1
stakeout "php $TESTFILE" *.php unit/*.php ../*.php ../libraries/*.php ../libraries/classes/*.php
