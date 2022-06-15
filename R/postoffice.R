library(httr)
library(rvest)
library(dplyr)

url = 'https://www.post.gov.tw/post/internet/I_location/index_all.html'

# 抓郵遞區號
postal_code = url %>% 
  read_html() %>%
  html_nodes(css = '.detail_icon+ .detail2') %>%
  html_text()
head(postal_code)

postal_code_text <- postal_code
for(i in 1:length(postal_code_text)){
  postal_code_text[i] <- paste0(", '", postal_code_text[i], "'")
}
head(postal_code_text)

# 抓電腦局號
office_id = url %>%
  read_html() %>%
  html_nodes(css = '.detail2:nth-child(3)') %>%
  html_text()
head(office_id)

office_id_text <- office_id
for(i in 1:length(office_id)){
  office_id_text[i] <- paste0("INSERT INTO `office` VALUES ('", office_id_text[i], "'")
}
head(office_id_text)

# 抓地址
address = url %>%
  read_html() %>%
  html_nodes(css = '.detail') %>%
  html_text()
head(address)

address_text <- address

for(i in 1:length(address)){
  address_text[i] <- paste0(", '", address_text[i], "'")
}
head(address_text)

# 抓局名
office_name = url %>%
  read_html() %>%
  html_nodes(css = ".detail2:nth-child(4)") %>%
  html_text()
head(office_name)

office_name <- gsub('[\r\n\t]', "", office_name)
office_name_text <- office_name
for(i in 1:length(office_name)){
  office_name_text[i] <- paste0(", '", office_name_text[i],"'")
}
office_name_text


# 抓電話
tel = url %>%
  read_html() %>%
  html_nodes(css = ".detail+ td") %>%
  html_text()
head(tel)

tel_text <- tel
for (i in 1:length(tel)){
  tel_text[i] <- paste0(", '",tel_text[i],"');")
}
head(tel_text)

df = data.frame(office_id_text, postal_code_text, address_text, office_name_text, tel_text)
head(df)


library(readxl)
library(readr)
write.csv(df, 'D:/Users/jimmy/Desktop/postoffice.csv')

