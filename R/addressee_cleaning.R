library(dplyr)
library(readxl)
library(readr)
library(data.table)
setwd('D:/Users/jimmy/Desktop')

text1 <- addressee$...1
head(text1)
for (i in 1:length(addressee$...1)){
  text1[i] <- paste0("INSERT INTO `addressee` (`addressee_name`, `postal_code`, `address`) VALUES ('", text1[i], "'")
}
head(text1)

text2 <- addressee$...2
head(text2)
for (i in 1:length(addressee$...2)){
  text2[i] <- paste0(", '", text2[i], "'")
}
head(text2)


text3 <- addressee$...3
head(text3)
text3 <- gsub('^[0-9]{3}', "", text3)
text3 <- gsub(" ", "", text3)
for(i in 1:length(addressee$...3)){
  text3[i] <- paste0(", '", text3[i], "');")
}
head(text3)

df <- data.frame(text1, text2, text3)
head(df)
write.csv(df, 'addressee.csv')

