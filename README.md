# WIP, not suited for production yet!!! only for testing!!!

# How-to:
1. Copy paste the <b>inner contents</b> of the folder 'NepaliIntegration_GibbonFiles' into gibbon's main folder

2. Make sure docker is installed, if yes then skip this step, <br>
otherwise run : 'apt install docker-compose-v2' (if necessary run, 'apt update' first)

3. To run the date helper backend: 'docker compose up --build -d',  (while in this directory) <br>

4. Refresh gibbon webpage

Notes:<br>
i. To stop backend helper: 'docker compose down', (while in this directory)

ii. To check if it is running, run 'docker compose ls', (from any directory) <br>
and check if 'nepali-date-helper' service is displayed and is also running.