<?php
$array = [ 
    "what is Kafka" => "Kafka ===> Topic ===> partitioning",

    "Step 1 Start Zookeper Container and expose PORT"  => "docker run -p 2181:2181 zookeeper",

    "Step 2 Start Kafka Container, expose PORT 9092 and setup ENV variables"  => "docker run -p 9092:9092 \
    -e KAFKA_ZOOKEEPER_CONNECT=<PRIVATE_IP>:2181 \
    -e KAFKA_ADVERTISED_LISTENERS=PLAINTEXT://<PRIVATE_IP>:9092 \
    -e KAFKA_OFFSETS_TOPIC_REPLICATION_FACTOR=1 \
    confluentinc/cp-kafka",

    "See Link" => "https://gist.github.com/piyushgarg-dev/32cadf6420c452b66a9a6d977ade0b01"
  
];


//https://gist.github.com/piyushgarg-dev/32cadf6420c452b66a9a6d977ade0b01

include('bottom.php'); 