from transformers import MarianMTModel, MarianTokenizer

class TextTranslator:
    
    #definování třídy překladu textu
    def __init__(self, source_lang, target_lang):
        self.model_name = f'Helsinki-NLP/opus-mt-{source_lang}-{target_lang}'
        self.tokenizer = MarianTokenizer.from_pretrained(self.model_name)
        self.model = MarianMTModel.from_pretrained(self.model_name)

    #definování metody překládání
    def translate(self, text):
        inputs = self.tokenizer(text, return_tensors='pt')
        outputs = self.model.generate(**inputs)
        translated_text = self.tokenizer.batch_decode(outputs, skip_special_tokens=True)
        return translated_text

# Použití
translator = TextTranslator('en', 'cs')
input_text = "Hello, how are you?"
translated_text = translator.translate(input_text)
print(translated_text)
