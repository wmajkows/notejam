FROM python:2.7-stretch

ENV PYTHONUNBUFFERED 1

COPY notejam /usr/src/app
COPY start.sh /usr/src/app

WORKDIR /usr/src/app

COPY requirements.txt ./
RUN pip install -r requirements.txt \
    && pip install --upgrade pip \
    && pip install psycopg2

EXPOSE 80

CMD /usr/src/app/start.sh
