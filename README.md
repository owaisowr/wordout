# wordout
Broadcast Notices
- Users can create a broadcast.
- Users can view a broadcast using BID.
- An authorized broadcaster can add and clear notices.

Live demo on: [WordOut](http://wordout.gq)

Database Information:

Database is implemented using MySQL:

There are two tables:
1. broadcasts
2. msgs

broadcast table has 3 columns:
 id int(64) AUTO_INCREMENT PRIMARY
 bid varchar(32) UNIQUE
 pwd varchar(64)

msgs table has 3 columns:
 bid varchar(32)
 msg text
 date datetime
