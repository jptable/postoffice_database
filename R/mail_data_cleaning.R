library(readr)
library(dplyr)
setwd("D:/Users/jimmy/Desktop")

V1 <- mail_data$mail_type_id

for(i in 1: length(V1)){
  V1[i] <- paste0("INSERT INTO `mail_data`
                  (`mail_type_id`, `sender_id`, `addressee_id`, `mail_weight`, `mail_cost`, `employee_id`)VALUES ('", 
                  V1[i], "'")
}


V2 <- mail_data$sender_id

for(i in 1:length(V2)){
  V2[i] <- paste0(", '", V2[i], "'")
  
}


V3 <- mail_data$addressee_id

for(i in 1:length(V3)){
  V3[i] <- paste0(", '", V3[i], "'")
}


V4 <- mail_data$mail_weight

for(i in 1:length(V4)){
  V4[i] <- paste0(", '", V4[i], "'")
}


V5 <- mail_data$mail_cost

for(i in 1:length(V5)){
  V5[i] <- paste0(", '", V5[i], "'")
}


V6 <- mail_data$employee_id

for(i in 1:length(V6)){
  V6[i] <- paste0(", '", V6[i], "');")
}



