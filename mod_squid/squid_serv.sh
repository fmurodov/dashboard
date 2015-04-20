#!/usr/bin/env bash

SQUID=/etc/init.d/squid3

case "$1" in
    reload)
    $SQUID reload
    ;;
    status)
    $SQUID status
    ;;
  restart)
    $SQUID restart
    ;;
  *)
    echo "Usage: $0 {status|reload|restart}"
    exit 1
esac
