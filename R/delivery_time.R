library(readr)
library(dplyr)

V1 <- delivery_time$mail_id
for(i in 1:length(V1)){
  V1[i] <- paste0("INSERT INTO `delivery_arrival_time VALUES ('", V1[i], "'")
}


V2 <- delivery_time$delivery_time
head(V2)


for(i in 1:length(V2)){
  character(V2[i])
}
