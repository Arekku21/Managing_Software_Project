Create	database if not exists MSP;
use MSP;

create table if not exists Users(
	userid int(10) not null auto_increment,
    userrole enum('admin','regular') default 'regular',
    username varchar(50) unique not null,
    userpassword varchar(50) not null,
    created_at datetime default current_timestamp,
    primary key (userid)
);

create table if not exists Inventory(
	itemid int(10) not null auto_increment,
    itemname varchar(100) not null,
    supplierid int(10) not null,
    batchid int(10) not null,
    itemquantity int(10),
    itemexpiry datetime,
    itemnote varchar(255),
    primary key (itemid)
);

commit;
