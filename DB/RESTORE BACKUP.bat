@color 2
@echo WELCOME to BACKUP TOOL fitpos_db
@echo **********************************************

mysql -h localhost -u root -p  fitpos_db < fitpos_db.sql

@pause