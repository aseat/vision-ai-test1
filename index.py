#visionをインポート
from google.cloud import vision

#image.jpgを開いて読み込む
with open('./image/ダイヤ.jpeg', 'rb') as image_file:
  content = image_file.read()

image = vision.Image(content=content)

#ImageAnnotatorClientのインスタンスを生成
annotator_client = vision.ImageAnnotatorClient()

print(annotator_client.label_detection(image=image))