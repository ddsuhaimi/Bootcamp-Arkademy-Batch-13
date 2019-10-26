def findHighestProfit(profit_list):
  max_profit = 0
  for i in profit_list:
    for j in profit_list[i+1:]:
      current_profit = j-i
      if current_profit > max_profit and current_profit>0:
        max_profit = current_profit
  if max_profit == 0:
    return 'Tidak bisa mendapatkan profit pada hari-hari ini'
  
  return max_profit
        
print(findHighestProfit([10, 2, 11, 20, 3, 5])) # 18
print(findHighestProfit([33, 29, 11, 3])) # Tidak bisa mendapatkan profit pada hari-hari ini