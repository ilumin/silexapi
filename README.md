# silexapi

```
	silex-api ❯❯❯ docker run -it --rm --net=silexapi_default ilumin/wrk -t12 -c400 -d30s http://172.19.0.3/test-param/ilumin
	Running 30s test @ http://172.19.0.3/test-param/ilumin
	  12 threads and 400 connections
	  Thread Stats   Avg      Stdev     Max   +/- Stdev
	    Latency     1.11s   457.24ms   2.00s    71.91%
	    Req/Sec    16.46     15.40   178.00     88.81%
	  3771 requests in 30.03s, 0.98MB read
	  Socket errors: connect 0, read 0, write 0, timeout 1023
	  Non-2xx or 3xx responses: 50
	Requests/sec:    125.58
	Transfer/sec:     33.45KB
```
