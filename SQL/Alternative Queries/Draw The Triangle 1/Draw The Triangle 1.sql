declare @total int
declare @string varchar(50)
set @total = 20
while(@total>=1)
begin
set @string = replicate('* ',@total) 
print @string
set @total = @total - 1
end