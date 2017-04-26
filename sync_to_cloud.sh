#!/bin/bash
#
# Syncs the padsim stuff to the cloud.

gsutil -m rsync -r . gs://mirubot/websites/padsim
gsutil -m acl ch -u AllUsers:R gs://mirubot/websites/padsim/*

