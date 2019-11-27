create table board (
    num int unsigned not null primary key auto_increment,
    title varchar(150) not null,
    content text not null,
    id varchar(20) not null,
    day datetime not null,
    hit int unsigned not null default 0
);
create table comment (
    num int unsigned not null primary key auto_increment,
    board_num int unsigned not null,
    id varchar(20) not null,
    content text not null,
    day datetime not null,
    parent_num int unsigned not null default 0
);

create table member (
    id varchar(16) not null,
    pw varchar(20) not null,
    email varchar(30) not null,
    day datetime not null,
    permit tinyint(3) unsigned
  );
