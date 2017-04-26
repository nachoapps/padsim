#!/bin/bash
#
# Syncs the padsim stuff to the cloud.

gsutil -m rsync -r . gs://padsim/website
gsutil -m acl ch -u AllUsers:R gs://padsim/website/*

