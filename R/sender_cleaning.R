library(dplyr)
library(readxl)
library(readr)
library(data.table)
setwd('D:/Users/jimmy/Desktop')

text1 <- sender$...1
head(text1)
for (i in 1:length(sender$...1)){
  text1[i] <- paste0("INSERT INTO `sender` (`sender_name`, `postal_code`, `address`) VALUES ('", text1[i], "'")
}
head(text1)

text2 <- sender$...2
head(text2)
for (i in 1:length(sender$...2)){
  text2[i] <- paste0(", '", text2[i], "'")
}
head(text2)


text3 <- sender$...3
head(text3)
text3 <- gsub('^[0-9]{3}', "", text3)
text3 <- gsub(" ", "", text3)
for(i in 1:length(sender$...3)){
  text3[i] <- paste0(", '", text3[i], "');")
}
head(text3)

df <- data.frame(text1, text2, text3)
head(df)
write.csv(df, 'sender.csv')

