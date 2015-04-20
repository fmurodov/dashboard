#!/usr/bin/env bash

NAME=$2
KEY=$3
USER_HOME="/home/pubftp/${NAME}"

function userlist()
 {
  pure-pw list
 }

function create_user()
 {
  (echo "${KEY}"; echo "${KEY}") | pure-pw useradd ${NAME} -u ftpuser -g ftpgroup -d ${USER_HOME} -m
 }

function rem_user()
 {
  pure-pw userdel ${NAME} -m
 }

function change_pass()
 {
  (echo "${KEY}"; echo "${KEY}") | pure-pw passwd ${NAME} -m
 }

function service_restart()
 {
  /etc/init.d/pure-ftpd restart
 }

case "$1" in
  list)
    userlist
    ;;
  create)
    create_user
    ;;
  remove)
    rem_user
    ;;
  chpass)
    change_pass
    ;;
  who)
    pure-ftpwho
    ;;

  restart)
    service_restart
    ;;
  *)
    echo "Usage: $0 {list|create|remove|change_pass|restart}"
    exit 1
esac
