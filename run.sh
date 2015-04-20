#!/usr/bin/env bash
NAME=$2
KEY=$3
USER_HOME="/home/pubftp/${NAME}"
SQUID_INIT="/etc/init.d/squid3"
PURE_FTPD_INIT="/etc/init.d/pure-ftpd"
PURE_PW_BIN="/usr/bin/pure-pw"

case "$1" in
  ftpd_list)
    ${PURE_PW_BIN} list
    ;;
  ftpd_create)
    (echo "${KEY}"; echo "${KEY}") | ${PURE_PW_BIN} useradd ${NAME} -u ftpuser -g ftpgroup -d ${USER_HOME} -m
    ;;
  ftpd_remove)
    ${PURE_PW_BIN} userdel ${NAME} -m
    ;;
  ftpd_chpass)
    (echo "${KEY}"; echo "${KEY}") | ${PURE_PW_BIN} passwd ${NAME} -m
    ;;
  ftpd_who)
    pure-ftpwho
    ;;
   ftpd_reload)
    ${PURE_FTPD_INIT} reload
    ;;
  ftpd_restart)
    ${PURE_FTPD_INIT} restart
    ;;
  squid_reload)
    ${SQUID_INIT} reload
    ;;
  squid_status)
    ${SQUID_INIT} status
    ;;
  squid_restart)
    ${SQUID_INIT} restart
    ;;
  *)
    echo "command not found"
    exit 1
esac
